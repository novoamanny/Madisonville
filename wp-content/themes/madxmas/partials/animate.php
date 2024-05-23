<script>
document.addEventListener("DOMContentLoaded", function(event) {
    // Locks in the animation once it has reached a certain scroll position
    let animateContainer = document.querySelectorAll('.animation-container');
    let animateContainerArray = [...animateContainer];
    animateContainerArray.forEach(item => {
        window.addEventListener("scroll", () => {
            if (item.getBoundingClientRect().top <= window.innerHeight * 2 / 3 && window
                .innerWidth > 768) {
                item.classList.add("active")
            }
        })
    })
});
</script>