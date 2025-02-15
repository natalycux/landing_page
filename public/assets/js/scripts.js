document.querySelectorAll("#category-filter a").forEach(link => {
    link.addEventListener("click", function(event) {
        event.preventDefault();
        fetch(this.href)
            .then(response => response.text())
            .then(html => {
                document.querySelector(".courses").innerHTML = 
                    new DOMParser().parseFromString(html, "text/html").querySelector(".courses").innerHTML;
            });
    });
});


