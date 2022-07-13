// Song data
const songList = [
    {
        title: "01 Bahrein - 26-12-2020 - Streaming",
        file: "01_Bahrein-26-12-2020-Streaming.mp3",
        cover: "1.jpeg"

    },
    {
        title: "02 Bahrein - 29-01-2021 - Streaming",
        file: "02_Bahrein-29-01-2021-Streaming.mp3",
        cover: "2.jpeg"

    },
    {
        title: "03 Bahrein - 12-03-2021 - Streaming",
        file: "03_Bahrein-12-03-2021-Streaming.mp3",
        cover: "3.jpeg"

    },
    {
        title: "04 Bahrein - 01-05-2021 - Streaming",
        file: "04_Bahrein-01-05-2021-Streaming.mp3",
        cover: "4.jpeg"

    },
    {
        title: "05 Bahrein - TechNOIR - 05-03-2022 Set Techno",
        file: "05_Bahrein-TechNOIR-05-03-2022-Set_Techno.mp3",
        cover: "5.jpeg"
    },
    {
        title: "06 Club Scalabrini 23-03-2021",
        file: "06_Club-Scalabrini_23-03-2021.mp3",
        cover: "6.jpeg"
    },
    {
        title: "07 Kick Sensation 09-02-2022",
        file: "07_Kick-Sensation-09-02-2022.mp3",
        cover: "7.jpeg"
    },
    {
        title: "08 PROMO - House - 27-08-2021",
        file: "08_PROMO-House-27-08-2021.mp3",
        cover: "8.jpeg"
    },
    {
        title: "09 PROMO - Tech House - 09-02-2022",
        file: "09_PROMO-Tech_House-09-02-2022.mp3",
        cover: "9.jpeg"
    },
]

// Canción actual
let actualSong = null

// Capturar elementos del DOM para trabajar con JS
const songs = document.getElementById("songs")
const audio = document.getElementById("audio")
const cover = document.getElementById("cover")
const title = document.getElementById("title")
const play = document.getElementById("play")
const prev = document.getElementById("prev")
const next = document.getElementById("next")
const progress = document.getElementById("progress")
const progressContainer = document.getElementById("progress-container")
progressContainer.addEventListener("click", setProgress)

// Escuchar el elemento AUDIO
audio.addEventListener("timeupdate", updateProgress)

// Escuchar clicks en los controles
play.addEventListener("click", () => {
    if (audio.paused) {
        playSong()   
    } else {
        pauseSong()
    }
})

next.addEventListener("click", () => nextSong())
prev.addEventListener("click", () => prevSong())

// Cargar canciones y mostrar el listado
function loadSongs() {
    songList.forEach((song, index) => {
        // Crear li
        const li = document.createElement("li")
        // Crear a
        const link = document.createElement("a")
        // Hidratar a
        link.textContent = song.title
        link.href = "#"
        // Escuchar clicks
        link.addEventListener("click", () => loadSong(index))
        // Añadir a li
        li.appendChild(link)
        // Aañadir li a ul
        songs.appendChild(li)
    })
}

// Cargar canción seleccionada
function loadSong(songIndex) {
    if (songIndex !== actualSong) {
        changeActiveClass(actualSong, songIndex)
        actualSong = songIndex
        audio.src = "../audio/" + songList[songIndex].file
        playSong()
        changeSongtitle(songIndex)
        changeCover(songIndex)
    }
}

// Actualizar barra de progreso de la canción
function updateProgress(event) {
    const {duration, currentTime} = event.srcElement
    const percent = (currentTime / duration) * 100
    progress.style.width = percent + "%" 
}

// Hacer la barra de progreso clicable
function setProgress(event) {
    const totalWidth = this.offsetWidth
    const progressWidth = event.offsetX
    const current = (progressWidth / totalWidth) * audio.duration
    audio.currentTime = current
}

// Actualiar controles
function updateControls() {
    if (audio.paused) {
        play.classList.remove("fa-pause")
        play.classList.add("fa-play")
    } else {
        play.classList.add("fa-pause")
        play.classList.remove("fa-play")
    }
}

// Reproducir canción
function playSong() {
    if (actualSong !== null) {
        audio.play()
        updateControls()
    }
}

// Pausar canción
function pauseSong() {
    audio.pause()
    updateControls()
}

// Cambiar clase activa
function changeActiveClass(lastIndex, newIndex) {
    const links = document.querySelectorAll("a")
    if (lastIndex !== null) {
        links[lastIndex].classList.remove("active")
    }
    links[newIndex].classList.add("active")
}

// Cambiar el cover de la canción
function changeCover(songIndex) {
    cover.src = "../imagenes/reproductormp3/" + songList[songIndex].cover
}

// Cambiar el título de la canción
function changeSongtitle(songIndex) {
     title.innerText = songList[songIndex].title
}

// Anterior canción
function prevSong() {
    if (actualSong > 0) {
        loadSong(actualSong - 1)
    } else {
        loadSong(songList.length - 1)
    }
}

// Siguiente canción
function nextSong() {
    if (actualSong < songList.length -1) {
        loadSong(actualSong + 1)
    } else {
        loadSong(0)
    }
}

// Lanzar siguiente canción cuando se acaba la actual
audio.addEventListener("ended", () => nextSong())

// GO!
loadSongs()