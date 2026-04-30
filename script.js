document.addEventListener("DOMContentLoaded", () => {
    let form = document.getElementById("formData");

    let nama = document.getElementById("nama");
    let tanggal = document.getElementById("tanggal_lahir");
    let gender = document.querySelectorAll('input[name="gender"]');
    let alamat = document.getElementById("alamat");
    let email = document.getElementById("email");
    let pesan = document.getElementById("pesan");


    nama.addEventListener("input", () => {
        if (nama.value.trim().length < 3) {
            nama.style.border = "2px solid red";
            nama.textContent = "Isi nama woy";
            nama.style.color = "#FF3737"
        } else {
            nama.style.border = "2px solid green";
            nama.style.color = "black"
        }
    });

    email.addEventListener("input", () => {
        if (!email.value.includes("@")) {
            email.style.border = "2px solid red";
        } else {
            email.style.border = "2px solid green";
        }
    });


    form.addEventListener("submit", (e) => {

        let selectedGender = document.querySelector('input[name="gender"]:checked');

        let namaValue = nama.value.trim();
        let emailValue = email.value.trim();
        let alamatValue = alamat.value.trim();
        let pesanValue = pesan.value.trim();
        let tanggalValue = tanggal.value.trim();

        // cek jika kosong 
        if (
            namaValue == "" &&
            emailValue == "" &&
            alamatValue == "" &&
            pesanValue == ""
        ) {
            e.preventDefault();
            alert("Semua form masih kosong!");
            return;
        }

        
        if (namaValue.length < 3) {
            e.preventDefault();
            alert("Nama minimal 3 karakter!");
            return;
        }

        //tanggal;
        if (tanggalValue == ""){
            e.preventDefault();
            alert("Jangan Lupa isi tanggalnya yaa");
            return;
        }

        // gender
        if (!selectedGender) {
            e.preventDefault();
            alert("Pilih jenis kelamin!");
            return;
        }


        if (alamatValue==""){
            e.preventDefault();
            alert("Jangan Lupa isi alamat yaa");
            return;
        }

        // email
        if (emailValue === "" || !emailValue.includes("@")) {
            e.preventDefault();
            alert("Email tidak valid!");
            return;
        }

        const data = {
            nama: namaValue,
            tanggal: tanggal.value,
            gender: selectedGender.value,
            alamat: alamatValue,
            email: emailValue,
            pesan: pesanValue
        };

        console.log("DATA FORM:", data);
        confirm("Apakah semuanya sudah benar?");
        alert("Terimakasih sudah mengisi");
        form.reset();
    });

});