document.addEventListener("DOMContentLoaded", function () {
    // Select all video containers
    const videoContainers = document.querySelectorAll(".video-container");

    videoContainers.forEach(container => {
        container.addEventListener("click", function () {
            const videoId = this.getAttribute("data-video-id");
            loadVideo(this, videoId);
        });
    });

    function loadVideo(container, videoId) {
        const iframe = document.createElement("iframe");
        iframe.className = "w-full h-64 sm:h-72 md:h-80 lg:h-96";
        iframe.setAttribute("loading", "lazy");
        iframe.setAttribute("src", `https://www.youtube-nocookie.com/embed/${videoId}?autoplay=1`);
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allow", "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share");
        iframe.setAttribute("allowfullscreen", "");

        container.innerHTML = "";
        container.appendChild(iframe);
    }
});