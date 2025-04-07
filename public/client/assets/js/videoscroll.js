// gsap.registerPlugin(ScrollTrigger);

// gsap.to(".video-container", {
//     scrollTrigger: {
//         trigger: ".hero",
//         start: "top 20%",
//         end: "100% 0%",
//         markers: true,
//         scrub: true,
//         pin: ".hero",
//         onUpdate: (self) => {
//             const videoContainer = document.querySelector(".video-container");
//             const video = document.getElementById("myVideo");
//             const navbar = document.querySelector(".navbar");

//             // Calculate the progress
//             const progress = self.progress;
//             progress < 0.4
//                 ? (navbar.style.zIndex = "10000")
//                 : (navbar.style.zIndex = "0");
//             // Animate shape change and size using GSAP
//             gsap.to(videoContainer, {
//                 width:
//                     progress < 0.5
//                         ? 70 + progress * (window.innerWidth - 70)
//                         : "100vw",
//                 height:
//                     progress < 0.5
//                         ? 70 + progress * (window.innerHeight - 70)
//                         : "100vh",
//                 borderRadius: progress < 0.4 ? "70%" : "0%",
//                 zIndex: progress < 0.4 ? 99999 : 999999, // Increase z-index when full screen
//                 marginTop: "-17px",
//                 marginLeft: "6px",
//                 duration: 0,
//             });
//         },
//     },
// });

// // gsap.registerPlugin(ScrollTrigger);

// // gsap.to(".video-container", {
// //     scrollTrigger: {
// //         trigger: ".hero",
// //         start: "top 18.3%",
// //         end: "85% 18.3%", // Adjusted end point to make video full screen before end
// //         markers: true,
// //         scrub: true,
// //         pin: ".hero",
// //         onUpdate: (self) => {
// //             const videoContainer = document.querySelector(".video-container");
// //             const video = document.getElementById("myVideo");

// //             // Calculate the progress
// //             const progress = self.progress;

// //             // Animate shape change and size using GSAP
// //             gsap.to(videoContainer, {
// //                 width:
// //                     progress < 0.95
// //                         ? 70 + progress * (window.innerWidth - 70)
// //                         : "100vw",
// //                 height:
// //                     progress < 0.95
// //                         ? 70 + progress * (window.innerHeight - 70)
// //                         : "100vh",
// //                 borderRadius: progress < 0.95 ? "50%" : "0%",
// //                 zIndex: 999999, // Ensure video container stays on top
// //                 marginTop: progress < 0.95 ? "-17px" : "0",
// //                 marginLeft: progress < 0.95 ? "6px" : "0",
// //                 duration: 0,
// //             });

// //             // Play video when it is almost full screen
// //             if (progress >= 0.95) {
// //                 video.play();
// //             }
// //         },
// //         onLeave: () => {
// //             const videoContainer = document.querySelector(".video-container");
// //             const video = document.getElementById("myVideo");

// //             gsap.to(videoContainer, {
// //                 width: "100vw",
// //                 height: "100vh",
// //                 borderRadius: "0%",
// //                 zIndex: 999999,
// //                 marginTop: "0",
// //                 marginLeft: "0",
// //                 duration: 0,
// //             });

// //             // Ensure video continues to play
// //             video.play();
// //         },
// //     },
// // });

// // document.addEventListener("DOMContentLoaded", () => {
// //     gsap.registerPlugin(ScrollTrigger);

// //     let videoContainer = document.querySelector(".video-container");

// //     gsap.to(videoContainer, {
// //         width: "100vw",
// //         height: "100vh",
// //         borderRadius: "0%",
// //         top: "0%",
// //         left: "0%",
// //         transform: "none",
// //         ease: "power1.inOut",
// //         scrollTrigger: {
// //             trigger: ".hero",
// //             start: "top top",
// //             end: "bottom top+=50%", // Extend the scroll duration
// //             scrub: 1, // Slow down the animation
// //             pin: true,
// //         },
// //     });

// //     ScrollTrigger.create({
// //         trigger: ".hero",
// //         start: "bottom top+=50%", // Synchronize with the end of the video animation
// //         end: "bottom bottom",
// //         pin: false,
// //         onEnter: () => {
// //             gsap.to(videoContainer, {
// //                 width: "100vw",
// //                 height: "100vh",
// //                 borderRadius: "0%",
// //                 top: "0%",
// //                 left: "0%",
// //                 transform: "none",
// //                 duration: 1,
// //             });
// //         },
// //         onLeaveBack: () => {
// //             gsap.to(videoContainer, {
// //                 width: "200px",
// //                 height: "200px",
// //                 borderRadius: "50%",
// //                 top: "50%",
// //                 left: "50%",
// //                 transform: "translate(-50%, -50%)",
// //                 duration: 1,
// //             });
// //         },
// //     });
// // });

// new video animation

document.addEventListener("DOMContentLoaded", function () {
    gsap.registerPlugin(ScrollTrigger);

    // Move h1 to the left
    gsap.fromTo(
        ".page1 > h1",
        { x: 0 },
        {
            x: "-10%",
            scrollTrigger: {
                trigger: ".page1",
                start: "top top",
                end: "30% top",
                scrub: true,
                // markers: true,
            },
        }
    );

    // Move h2 to the right
    gsap.fromTo(
        ".page1 > h2",
        { x: 0 },
        {
            x: "10%",
            scrollTrigger: {
                trigger: ".page1",
                start: "top top",
                end: "30% top",
                scrub: true,
                // markers: true,
            },
        }
    );

    gsap.fromTo(
        ".page1 > video",
        { width: "50%" },
        {
            width: "100%",
            scrollTrigger: {
                trigger: ".page1",
                start: "top top",
                end: "30% top",
                scrub: true,
                // markers: true,
            },
        }
    );
});
