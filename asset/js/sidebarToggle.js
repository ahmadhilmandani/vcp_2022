const sidebarDiv = document.querySelectorAll("#staticBackdrop div")
const a = document.querySelectorAll("#staticBackdrop div a")
const sidebarIcon = document.querySelectorAll("#staticBackdrop div i");
const berandaKonten = document.getElementById("beranda-konten");

const coba = berandaKonten.getAttribute("data-click-sidebar")

if (berandaKonten.getAttribute("data-click-sidebar") == 0) {
    clickSidebar(0)
}
else if (berandaKonten.getAttribute("data-click-sidebar") == "pertama") {
    clickSidebar(1)
}
else if (berandaKonten.getAttribute("data-click-sidebar") == "kedua") {
    clickSidebar(2)
}
else if (berandaKonten.getAttribute("data-click-sidebar") == "ketiga") {
    clickSidebar(3)
}
else if (berandaKonten.getAttribute("data-click-sidebar") == "keempat") {
    clickSidebar(4)
}



function clickSidebar(parameterIndex) {
    // MENGUBAH WARNA dan TAMBAH BORDER untuk element yang DIKLIK menjadi BIRU
    sidebarDiv[parameterIndex].classList.add("border", "border-5", "border-bottom-0", "border-top-0", "border-end-0", "border-primary")
    a[parameterIndex].classList.replace("text-grey-custom", "text-secondary")
    a[parameterIndex].classList.add("fw-bold")

    sidebarIcon[parameterIndex].classList.replace("text-grey-custom", "text-secondary")
    sidebarIcon[parameterIndex].classList.add("fs-4")


    // MENGUBAH ELEMENT YANG TIDAK DI KLIK menjadi abu
    for (let index = 0; index < sidebarDiv.length; index++) {
        if (index != parameterIndex && (a[index].classList.contains("text-secondary") == true)) {
            sidebarDiv[index].classList.remove("border-5", "border-start", "border-primary");
            a[index].classList.replace("text-secondary", "text-grey-custom")
            a[index].classList.remove("fw-bold")

            sidebarIcon[index].classList.replace("text-secondary", "text-grey-custom")
            sidebarIcon[index].classList.remove("fs-4")
        }
    }
}

