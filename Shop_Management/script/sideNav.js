document.addEventListener("DOMContentLoaded", function() {
    const dropdownToggle = document.querySelector(".dropdown-toggle");
    const dropdown = document.querySelector(".dropdown");
    
    dropdownToggle.addEventListener("click", function(event) {
        event.preventDefault();
        dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
    });
});

