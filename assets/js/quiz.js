$(document).ready(function() {
    //when click id submit-quiz
    $('#submit-quiz').click(function() {
        //ตำ
        //ปิ้งย่าง
        //ต้ม
        //ทอด

        let results = [];
        let choices = [];
        let foodPreferences = {
            pound: 0,
            grill: 0,
            boil: 0,
            fry: 0,
            // สามารถเพิ่มแนวอื่นๆ ตามความต้องการได้ ตัวอย่างการใส่ code แนวอื่นๆ ด้านล่าง โดยให้คะแนนเริ่มต้นเป็น 0 ดังนี้
            // romance: 0,
        };

        let unansweredQuestions = 0; // Counter for unanswered questions

        // Loop through each question
        for (let i = 1; i <= 10; i++) {
            // Get the value of the selected radio button
            const answer = $("input[name='q" + i + "']:checked").val(); // ดึงค่าที่เลือก

            if (answer) {
                results.push("คำถาม " + i + ": " + answer);
                switch (answer) {
                    case "a":
                        foodPreferences.pound++;
                        break;
                    case "b":
                        foodPreferences.grill++;
                        break;
                    case "c":
                        foodPreferences.boil++;
                        break;
                    case "d":
                        foodPreferences.fry++;
                        break;
                    // สามารถเพิ่มแนวอื่นๆ ตามความต้องการได้ ตัวอย่างการใส่ code แนวอื่นๆ ด้านล่าง โดยให้คะแนนเริ่มต้นเป็น 0 ดังนี้
                    // case "romance":
                    //     foodPreferences.romance++;
                    //     break;
                }
                choices.push(answer);
            }else {
                results.push("คำถาม " + i + ": ไม่ได้เลือกคำตอบ");
                unansweredQuestions++; // Increment unanswered questions counter
            }
        }

        // Check if there are any unanswered questions
        if (unansweredQuestions > 0) {
            Swal.fire({
                title: "ข้อผิดพลาด",
                text: "กรุณาตอบคำถามให้ครบทุกข้อ",
                icon: "warning"
            });
            return; // Exit the function if there are unanswered questions
        }



        let preferredGenre = Object.keys(foodPreferences).reduce((a, b) => foodPreferences[a] > foodPreferences[b] ? a : b);
        let preferredGenreImg = preferredGenre;

        if(preferredGenre == "pound"){
            preferredGenre = "ตำ";
        }else if(preferredGenre == "grill"){
            preferredGenre = "ปิ้งย่าง";
        }else if(preferredGenre == "boil"){
            preferredGenre = "ต้ม";
        }else if(preferredGenre == "fry"){
            preferredGenre = "ทอด";
        }


        Swal.fire({
            title: "ผลลัพธ์",
            text: "อาหารที่เหมาะกับคุณคืออาหารประเภท " + preferredGenre,
            imageUrl: "assets/images/type/" + preferredGenreImg + ".png",
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: preferredGenre
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'insert_quiz.php',
                    type: 'POST',
                    data: {
                        choices: choices
                    }
                });
            }
        });




        
    });
});