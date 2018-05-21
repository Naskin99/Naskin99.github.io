
        function togglePortfolioHeight(){
            h = document.getElementById("portfolio-content").clientHeight;
            if(h==1000){
                document.getElementById("portfolio-content").style.height = "auto";
                document.getElementById("portfolio-toggle").innerHTML = "show less";
            }else{
                document.getElementById("portfolio-content").style.height = "1000px";
                document.getElementById("portfolio-toggle").innerHTML = "show more";
            }
        }
        document.getElementById("portfolio-toggle").addEventListener("click",togglePortfolioHeight);
    
        var testamonialIndex = 0
        var testamonialArray = [
            "Keith did our changing facilities at kellingley welfare f.c....was a really big job...they hadnt been  done for a few years...he did a fantastic job .very proffesional...still looks the biz now...thanks very much keith..",
            "Just had full house painted. It looks amazing. Very friendly, trustworthy and reliable. The place is immaculate, no mess or cleaning up to do. All prep work done prior to painting. Work done to a very high standard. Would definitely recommend Browns and would use again. Thankyou Keith for an amazing result.",
            "Fantastic job and would 110% recommend. Quick, reliable and did an amazing job on the entire house.",
            "Superb!! Couldn't be more helpful. Price for quality of job excellent. Highly recommended."
        ]
        
        function changeTestamonial(){            
            var x = document.getElementById("testamonials");
            if (testamonialIndex == 3){
                x.innerHTML = testamonialArray[0];
                testamonialIndex = 0;
            } else{
                x.innerHTML = testamonialArray[testamonialIndex + 1];
                testamonialIndex++;
            }
        }
        
        
        function reverseTestamonial(){            
            var x = document.getElementById("testamonials");
            if (testamonialIndex == 0){
                x.innerHTML = testamonialArray[3];
                testamonialIndex = 3;
            } else{
                x.innerHTML = testamonialArray[testamonialIndex - 1];
                testamonialIndex--;
            }
        }
        
        
        document.getElementById("about-link").addEventListener("click" , function(){
            document.getElementById("about-marker").scrollIntoView();   
        })
        document.getElementById("portfolio-link").addEventListener("click" , function(){
            document.getElementById("portfolio-marker").scrollIntoView();   
        })
        document.getElementById("testamonials-link").addEventListener("click" , function(){
            document.getElementById("testamonials-marker").scrollIntoView();   
        })
        document.getElementById("contact-link").addEventListener("click" , function(){
            document.getElementById("contact-marker").scrollIntoView();   
        })
        
        document.getElementById("testamonial-next").addEventListener("click" , changeTestamonial)
        document.getElementById("testamonial-prev").addEventListener("click" , reverseTestamonial)
        