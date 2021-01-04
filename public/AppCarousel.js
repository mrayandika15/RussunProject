// const carouselrussun = document.querySelector('.container-russun-prev');

// let itemCorousel1 = document.querySelector('.carousel-item:nth-child(1)');

// let itemCorousel2 = document.querySelector('.carousel-item:nth-child(2)');

// let itemCorousel3 = document.querySelector('.carousel-item:nth-child(3)')

// let active = document.querySelector('.active');

// let bg1 = document.getElementById('bg1');
// let bg2 = document.getElementById('bg2');
// let bg3 = document.getElementById('bg3');


let caontainerrussun = document.querySelector('.inner-corousel-russun');

let containerimg = document.querySelectorAll('.inner-corousel-russun img');



const navContainerLeft = document.querySelector('.carousel-russun-made-left');


const navContainerRight = document.querySelector('.carousel-russun-made-right');

const img1 = document.querySelector('.carousel1-russun');
const img2 = document.querySelector('.carousel2-russun');
const img3 = document.querySelector('.carousel3-russun');







// nav2Left.addEventListener('click' , function(){
//     nav2Left.classList.add('carousel-click');
//     nav2Left.addEventListener('animationend' , function(){
//         navContainerLeft.classList.remove('carousel-bg2')
//         nav2Left.classList.remove('carousel-click')
//         navContainerRight.classList.remove('carousel-bg3-right')
//         navContainerRight.classList.remove('carousel-click')
//         navContainerRight.classList.add('carousel-bg1-right')
//         navContainerLeft.classList.add('carousel-bg3')
//         img1.style.marginLeft = '-100%';
//         const nav1Right = document.querySelector('.carousel-bg1-right')
//         nav1Right.addEventListener('click' , function(){
//             nav1Right.classList.add('carousel-click');
//             nav1Right.addEventListener('animationend', function(){
//                 nav1Right.classList.remove('carousel-click');
//                 nav1Right.classList.remove('carousel-bg1-right')
//                 navContainerLeft.classList.remove('carousel-bg3')
//                 navContainerLeft.classList.add('carousel-bg2');
//                 navContainerRight.classList.add('carousel-bg3-right')
//                 img1.style.marginLeft = '0';
//             })
       

//         })

//         const nav3left = document.querySelector('.carousel-bg3')
//         nav3left.addEventListener('click', function(){
//             nav3left.classList.add('carousel-click')
//             nav3left.addEventListener('animationend' , function(){
//                 nav3left.classList.remove('carousel-click')
//                 navContainerLeft.classList.remove('carousel-bg3')
//                 navContainerRight.classList.remove('carousel-bg1-right')
//                 navContainerLeft.classList.add('carousel-bg1')
//                 navContainerRight.classList.add('carousel-bg2-right')
//                 img1.style.marginLeft = '-200%';
//                 const nav1left = document.querySelector('.carousel-bg1')
//                 nav1left.addEventListener('click' , function(){
//                     nav1left.classList.add('carousel-click')
//                     nav1left.addEventListener('animationend' , function(){
//                         nav1left.classList.remove('carousel-click')
//                         navContainerLeft.classList.remove('carousel-bg1')
//                         navContainerRight.classList.remove('carousel-bg2-right')
//                         img1.style.marginLeft = '0';
//                         navContainerRight.classList.add('carousel-bg3-right')
//                         navContainerLeft.classList.add('carousel-bg2')
//                     })
//                 })
                
    
//             })
            
    
//         })

       



//     });

    
// });

let nav1left = document.querySelector('.carousel-bg1');
let nav2left = document.querySelector('.carousel-bg2');
let nav3left = document.querySelector('.carousel-bg3')

let nav1Right = document.querySelector('.carousel-bg1-right');
let nav2Right = document.querySelector('.carousel-bg2-right');
let nav3Right = document.querySelector('.carousel-bg3-right');
const index1 = document.querySelector('#index1');
const index2 = document.querySelector('#index2');

const circle1 = document.querySelector('#circle1');
const circle2 = document.querySelector('#circle2');
const circle3 = document.querySelector('#circle3');

const statement = document.querySelectorAll('#statement');

const text = document.querySelector('.carousel-text-russun');



function navleft1(){

    statement[0].classList.add('active');
    statement[1].classList.remove('active');
    statement[2].classList.remove('active');

 
     // nav1left
     nav2left.style.display = 'block';
     nav3left.style.display = 'none';
     nav1left.style.display = 'block';
 
     // nav2right
     nav2Right.style.display = 'block';
     nav1Right.style.display = 'none';
     nav3Right.style.display = 'block';

     nav2left.classList.add('animation-carousel');
     nav3Right.classList.add('animation-carousel-right');


    nav1left.classList.add('carousel-click');
    text.classList.toggle('click-text');
  

    nav1left.addEventListener('animationend' , function(){
        text.classList.remove('click-text');
        nav1left.classList.remove('carousel-click'); 

        nav2left.classList.remove('animation-carousel');
        nav3Right.classList.remove('animation-carousel-right');
   
      

            
        if(img2.classList.contains('active')){
            img1.style.marginLeft = '-100%';
            // nav1right
            nav2Right.style.display ='none';
            nav3Right.style.display ='none';
            nav1Right.style.display = 'block';
        
        
            // nav3left
            nav1left.style.display = 'none';
            nav2left.style.display = 'none';
            nav3left.style.display = 'block';
        
            index1.style.display = 'flex';
            index2.style.display = 'none';
            circle1.style.display = 'none';
            circle2.style.display = 'flex';
            circle3.style.display = 'none';
            
        
            
        }
        if(img3.classList.contains('active')){
            
            img1.style.marginLeft = '-200%';
            
            // nav1left
            nav2left.style.display = 'none';
            nav3left.style.display = 'none';
            nav1left.style.display = 'block';
        
            // nav2right
            nav2Right.style.display = 'block';
            nav1Right.style.display = 'none';
            nav3Right.style.display = 'none';
        
            index1.style.display = 'none';
            index2.style.display = 'flex';
            circle1.style.display = 'none';
            circle2.style.display = 'none';
            circle3.style.display = 'flex';
        }
        if(img1.classList.contains('active')){
          
            img1.style.marginLeft = "0";
        
            // nav2left
            nav2left.style.display = 'block';
            nav1left.style.display = 'none';
            nav3left.style.display = 'none';
        
            // nav3right
            nav3Right.style.display = 'block';
            nav2Right.style.display ='none';
            nav1Right.style.display ='none';
        
            index1.style.display = 'flex';
            index2.style.display = 'none';
            circle1.style.display = 'flex';
            circle2.style.display = 'none';
            circle3.style.display = 'none';
            
        }
        
    })
  
            
 

}

function navleft2(){

    statement[1].classList.add('active');
    statement[0].classList.remove('active');
    statement[2].classList.remove('active');

    nav2left.classList.add('carousel-click');
    text.classList.add('click-text');

    
     // nav1left
     nav2left.style.display = 'block';
     nav3left.style.display = 'block';
     nav1left.style.display = 'none';
 
     // nav2right
     nav2Right.style.display = 'none';
     nav1Right.style.display = 'block';
     nav3Right.style.display = 'block';
 

    nav3left.classList.add('animation-carousel');
    nav1Right.classList.add('animation-carousel-right');




    nav2left.addEventListener('animationend' , function(){
        nav2left.classList.remove('carousel-click'); 
        text.classList.remove('click-text');    
    nav3left.classList.remove('animation-carousel');
    nav1Right.classList.remove('animation-carousel-right');
       
        
    if(img2.classList.contains('active')){
        img1.style.marginLeft = '-100%';
        // nav1right
        nav2Right.style.display ='none';
        nav3Right.style.display ='none';
        nav1Right.style.display = 'block';
    
    
        // nav3left
        nav1left.style.display = 'none';
        nav2left.style.display = 'none';
        nav3left.style.display = 'block';
    
        index1.style.display = 'flex';
        index2.style.display = 'none';
        circle1.style.display = 'none';
        circle2.style.display = 'flex';
        circle3.style.display = 'none';
        
    
        
    }
    if(img3.classList.contains('active')){
        
        img1.style.marginLeft = '-200%';
        
        // nav1left
        nav2left.style.display = 'none';
        nav3left.style.display = 'none';
        nav1left.style.display = 'block';
    
        // nav2right
        nav2Right.style.display = 'block';
        nav1Right.style.display = 'none';
        nav3Right.style.display = 'none';
    
        index1.style.display = 'none';
        index2.style.display = 'flex';
        circle1.style.display = 'none';
        circle2.style.display = 'none';
        circle3.style.display = 'flex';
    }
    if(img1.classList.contains('active')){
      
        img1.style.marginLeft = "0";
    
        // nav2left
        nav2left.style.display = 'block';
        nav1left.style.display = 'none';
        nav3left.style.display = 'none';
    
        // nav3right
        nav3Right.style.display = 'block';
        nav2Right.style.display ='none';
        nav1Right.style.display ='none';
    
        index1.style.display = 'flex';
        index2.style.display = 'none';
        circle1.style.display = 'flex';
        circle2.style.display = 'none';
        circle3.style.display = 'none';
        
    }
    

    })

   
       

 
    
}

function navleft3(){

    statement[1].classList.remove('active');
    statement[0].classList.remove('active');
    statement[2].classList.add('active');
    nav3left.classList.add('carousel-click');
    text.classList.add('click-text');


     // nav1left
     nav2left.style.display = 'none';
     nav3left.style.display = 'block';
     nav1left.style.display = 'block';
 
     // nav2right
     nav2Right.style.display = 'block';
     nav1Right.style.display = 'block';
     nav3Right.style.display = 'none';
 

    nav1left.classList.add('animation-carousel');
    nav2Right.classList.add('animation-carousel-right');

    nav3left.addEventListener('animationend' , function(){
        text.classList.remove('click-text');
        nav3left.classList.remove('carousel-click'); 
        nav1left.classList.remove('animation-carousel');
    nav2Right.classList.remove('animation-carousel-right');
       
        
    if(img2.classList.contains('active')){
        img1.style.marginLeft = '-100%';
        // nav1right
        nav2Right.style.display ='none';
        nav3Right.style.display ='none';
        nav1Right.style.display = 'block';
    
    
        // nav3left
        nav1left.style.display = 'none';
        nav2left.style.display = 'none';
        nav3left.style.display = 'block';
    
        index1.style.display = 'flex';
        index2.style.display = 'none';
        circle1.style.display = 'none';
        circle2.style.display = 'flex';
        circle3.style.display = 'none';
        
    
        
    }
    if(img3.classList.contains('active')){
        
        img1.style.marginLeft = '-200%';
        
        // nav1left
        nav2left.style.display = 'none';
        nav3left.style.display = 'none';
        nav1left.style.display = 'block';
    
        // nav2right
        nav2Right.style.display = 'block';
        nav1Right.style.display = 'none';
        nav3Right.style.display = 'none';
    
        index1.style.display = 'none';
        index2.style.display = 'flex';
        circle1.style.display = 'none';
        circle2.style.display = 'none';
        circle3.style.display = 'flex';
    }
    if(img1.classList.contains('active')){
      
        img1.style.marginLeft = "0";
    
        // nav2left
        nav2left.style.display = 'block';
        nav1left.style.display = 'none';
        nav3left.style.display = 'none';
    
        // nav3right
        nav3Right.style.display = 'block';
        nav2Right.style.display ='none';
        nav1Right.style.display ='none';
    
        index1.style.display = 'flex';
        index2.style.display = 'none';
        circle1.style.display = 'flex';
        circle2.style.display = 'none';
        circle3.style.display = 'none';
        
    }
    

    })
   

 

}

// nav right side

function navright1(){

    statement[0].classList.add('active');
    statement[2].classList.remove('active');
   statement[1].classList.remove('active');
    text.classList.add('click-text');
    nav2left.classList.add('animation-carousel');
    nav3Right.classList.add('animation-carousel-right');
    
    nav2left.style.display = 'block';
    nav1left.style.display = 'none';
    nav3left.style.display = 'block';

    // nav3right
    nav3Right.style.display = 'block';
    nav2Right.style.display ='none';
    nav1Right.style.display ='block';

    


    nav1Right.classList.add('carousel-click');
        nav1Right.addEventListener('animationend' , function(){
        text.classList.remove('click-text');
        nav1Right.classList.remove('carousel-click'); 
        nav2left.classList.remove('animation-carousel');
         nav3Right.classList.remove('animation-carousel-right');
        
         
         if(img2.classList.contains('active')){
            img1.style.marginLeft = '-100%';
            // nav1right
            nav2Right.style.display ='none';
            nav3Right.style.display ='none';
            nav1Right.style.display = 'block';
        
        
            // nav3left
            nav1left.style.display = 'none';
            nav2left.style.display = 'none';
            nav3left.style.display = 'block';
        
            index1.style.display = 'flex';
            index2.style.display = 'none';
            circle1.style.display = 'none';
            circle2.style.display = 'flex';
            circle3.style.display = 'none';
            
        
            
        }
        if(img3.classList.contains('active')){
            
            img1.style.marginLeft = '-200%';
            
            // nav1left
            nav2left.style.display = 'none';
            nav3left.style.display = 'none';
            nav1left.style.display = 'block';
        
            // nav2right
            nav2Right.style.display = 'block';
            nav1Right.style.display = 'none';
            nav3Right.style.display = 'none';
        
            index1.style.display = 'none';
            index2.style.display = 'flex';
            circle1.style.display = 'none';
            circle2.style.display = 'none';
            circle3.style.display = 'flex';
        }
        if(img1.classList.contains('active')){
          
            img1.style.marginLeft = "0";
        
            // nav2left
            nav2left.style.display = 'block';
            nav1left.style.display = 'none';
            nav3left.style.display = 'none';
        
            // nav3right
            nav3Right.style.display = 'block';
            nav2Right.style.display ='none';
            nav1Right.style.display ='none';
        
            index1.style.display = 'flex';
            index2.style.display = 'none';
            circle1.style.display = 'flex';
            circle2.style.display = 'none';
            circle3.style.display = 'none';
            
        }
        
    })
   



}

function navright2(){

    statement[2].classList.remove('active');
    statement[1].classList.add('active');
   statement[0].classList.remove('active');
    text.classList.add('click-text');
    nav3left.classList.add('animation-carousel');
    nav1Right.classList.add('animation-carousel-right');
  

       // nav1right
       nav2Right.style.display ='block';
       nav3Right.style.display ='none';
       nav1Right.style.display = 'block';
   
   
       // nav3left
       nav1left.style.display = 'block';
       nav2left.style.display = 'none';
       nav3left.style.display = 'block';
     
       
    nav2Right.classList.add('carousel-click');
    nav2Right.addEventListener('animationend' , function(){
        text.classList.remove('click-text');
        nav2Right.classList.remove('carousel-click'); 
        nav3left.classList.remove('animation-carousel');
        nav1Right.classList.remove('animation-carousel-right');
       
        if(img2.classList.contains('active')){
            img1.style.marginLeft = '-100%';
            // nav1right
            nav2Right.style.display ='none';
            nav3Right.style.display ='none';
            nav1Right.style.display = 'block';
        
        
            // nav3left
            nav1left.style.display = 'none';
            nav2left.style.display = 'none';
            nav3left.style.display = 'block';
        
            index1.style.display = 'flex';
            index2.style.display = 'none';
            circle1.style.display = 'none';
            circle2.style.display = 'flex';
            circle3.style.display = 'none';
            
        
            
        }
        if(img3.classList.contains('active')){
            
            img1.style.marginLeft = '-200%';
            
            // nav1left
            nav2left.style.display = 'none';
            nav3left.style.display = 'none';
            nav1left.style.display = 'block';
        
            // nav2right
            nav2Right.style.display = 'block';
            nav1Right.style.display = 'none';
            nav3Right.style.display = 'none';
        
            index1.style.display = 'none';
            index2.style.display = 'flex';
            circle1.style.display = 'none';
            circle2.style.display = 'none';
            circle3.style.display = 'flex';
        }
        if(img1.classList.contains('active')){
          
            img1.style.marginLeft = "0";
        
            // nav2left
            nav2left.style.display = 'block';
            nav1left.style.display = 'none';
            nav3left.style.display = 'none';
        
            // nav3right
            nav3Right.style.display = 'block';
            nav2Right.style.display ='none';
            nav1Right.style.display ='none';
        
            index1.style.display = 'flex';
            index2.style.display = 'none';
            circle1.style.display = 'flex';
            circle2.style.display = 'none';
            circle3.style.display = 'none';
            
        }
        
    
    })
     
}



function navright3(){

    statement[2].classList.add('active');
    statement[1].classList.remove('active');
   statement[0].classList.remove('active');

    nav3Right.classList.add('carousel-click');
    text.classList.add('click-text');
    nav1left.classList.add('animation-carousel');
    nav2Right.classList.add('animation-carousel-right')
  
    nav2left.style.display = 'block';
    nav3left.style.display = 'none';
    nav1left.style.display = 'block';
    // nav2right
    nav2Right.style.display = 'block';
    nav1Right.style.display = 'none';
    nav3Right.style.display = 'block';
    

    nav3Right.addEventListener('animationend' , function(){
        nav2Right.classList.remove('animation-carousel-right')
        nav1left.classList.remove('animation-carousel');
        text.classList.remove('click-text');
        nav3Right.classList.remove('carousel-click'); 
        if(img2.classList.contains('active')){
            img1.style.marginLeft = '-100%';
            // nav1right
            nav2Right.style.display ='none';
            nav3Right.style.display ='none';
            nav1Right.style.display = 'block';
        
        
            // nav3left
            nav1left.style.display = 'none';
            nav2left.style.display = 'none';
            nav3left.style.display = 'block';
        
            index1.style.display = 'flex';
            index2.style.display = 'none';
            circle1.style.display = 'none';
            circle2.style.display = 'flex';
            circle3.style.display = 'none';
            
        
            
        }
        if(img3.classList.contains('active')){
            
            img1.style.marginLeft = '-200%';
            
            // nav1left
            nav2left.style.display = 'none';
            nav3left.style.display = 'none';
            nav1left.style.display = 'block';
        
            // nav2right
            nav2Right.style.display = 'block';
            nav1Right.style.display = 'none';
            nav3Right.style.display = 'none';
        
            index1.style.display = 'none';
            index2.style.display = 'flex';
            circle1.style.display = 'none';
            circle2.style.display = 'none';
            circle3.style.display = 'flex';
        }
        if(img1.classList.contains('active')){
          
            img1.style.marginLeft = "0";
        
            // nav2left
            nav2left.style.display = 'block';
            nav1left.style.display = 'none';
            nav3left.style.display = 'none';
        
            // nav3right
            nav3Right.style.display = 'block';
            nav2Right.style.display ='none';
            nav1Right.style.display ='none';
        
            index1.style.display = 'flex';
            index2.style.display = 'none';
            circle1.style.display = 'flex';
            circle2.style.display = 'none';
            circle3.style.display = 'none';
            
        }
        
});

}


// if (img1.classList.contains('active')) {
//     img1.style.marginLeft = "0";
        
//     // nav2left
//     nav2left.style.display = 'block';
//     nav1left.style.display = 'none';
//     nav3left.style.display = 'none';

//     // nav3right
//     nav3Right.style.display = 'block';
//     nav2Right.style.display ='none';
//     nav1Right.style.display ='none';

//   } else if (img2.classList.contains('active')) {
//     img1.style.marginLeft = '-100%';
//     // nav1right
//     nav2Right.style.display ='none';
//     nav3Right.style.display ='none';
//     nav1Right.style.display = 'block';


//     // nav3left
//     nav1left.style.display = 'none';
//     nav2left.style.display = 'none';
//     nav3left.style.display = 'block';
//   } else {
  
//             img1.style.marginLeft = '-100%';
//             // nav1right
//             nav2Right.style.display ='none';
//             nav3Right.style.display ='none';
//             nav1Right.style.display = 'block';
        
        
//             // nav3left
//             nav1left.style.display = 'none';
//             nav2left.style.display = 'none';
//             nav3left.style.display = 'block';
   
//   }
    








    
nav1left.onclick = navleft1;
nav2left.onclick = navleft2;
nav3left.onclick = navleft3;

nav1Right.onclick = navright1;
nav2Right.onclick = navright2;
nav3Right.onclick = navright3;










 
  

  
 









// nav3Right.addEventListener('click' , function(){
//     nav3Right.classList.add('carousel-click');
//     nav3Right.addEventListener('animationend' , function(){
//         navContainerRight.classList.remove('carousel-bg3-right')
//         navContainerRight.classList.remove('carousel-click')
//         navContainerLeft.classList.remove('carousel-bg2')
//         navContainerLeft.classList.remove('carousel-click')
//         navContainerRight.classList.add('carousel-bg1-right')
//         img3.style.marginLeft = '-200%';
//     });
// })








// const hand = document.querySelector('.inner-corousel-russun');
// const imgslide = document.querySelectorAll('.inner-corousel-russun img');

// const prev = document.querySelector('#prev');
// const next = document.querySelector('#next');

// let counter = 1;
//  const size = imgslide[0].cllientWidth;

//  hand.style.transfrom = 'translateX(' + (-size * counter ) + 'px)';


//  next.addEventListener('click' , () => {
//      hand.style.transition = "transform 0.4s easein-out";
//     counter++;
//     hand.style.transfrom = 'translateX(' + (-size * counter) +'px)';
//  });




  








// carousel.addEventListener('click' , function(){

 


// let inside = document.querySelector('.carousel-bg1');

//     inside.classList.add('carousel-click');


// inside.addEventListener('animationend' , function(){
//     inside.classList.remove('carousel-click');

// });





// });





