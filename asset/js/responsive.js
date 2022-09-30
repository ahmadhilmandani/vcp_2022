const offcanvas = document.getElementById("staticBackdrop");

const deleteElement = () => {
    if (window.innerWidth < 768) {
        offcanvas.classList.add("offcanvas")
        offcanvas.classList.remove("offcanvas-md")
    }
    else {
        offcanvas.classList.remove("offcanvas")
        offcanvas.classList.add("offcanvas-md")

    }
}
console.log(offcanvas)
deleteElement()

window.addEventListener('resize', deleteElement)

