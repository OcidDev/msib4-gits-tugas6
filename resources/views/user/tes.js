function process_argv() {
    const { argv } = process;
    const result = studentStatus(argv[2], argv[3]);

    return result;
}

function studentStatus(name, studentId) {// mendapatkan kode fakultas, tahun terdaftar, kode prodi, dan nomor urut student dari studentId
    const kodeFakultas = studentId.substr(0, 2);
    const tahunTerdaftar = studentId.substr(2, 4);
    const kodeProdi = studentId.substr(6, 2);
    const nomorUrutStudent = studentId.substr(8, 4);

    // menentukan fakulas berdasarkan kode fakultas
    let namaFakultas = "";
    switch (kodeFakultas) {
        case "FE":
            namaFakultas = "Fakultas Ekonomi";
            break;
        case "FISIP":
            namaFakultas = "Fakultas Ilmu Sosial dan Politik";
            break;
        case "FT":
            namaFakultas = "Fakultas Teknik";
            break;
        case "FTIS":
            namaFakultas = "Fakultas Teknologi Informasi dan Sains";
            break;
            default:
            namaFakultas = "Fakultas Tidak Diketahui";
    }

    // menentukan nama prodi berdasarkan kode prodi
    let namaProdi = "";
    switch (kodeProdi) {
        case "21":
            namaProdi = "Ekonomi";
            break;
        case "22":
            namaProdi = "Manajemen";
            break;
        case "23":
            namaProdi = "Aknuntansi";
            break;
        case "31":
            namaProdi = "Administrasi Publik";
            break;
        case "32":
            namaProdi = "Administrasi Bisnis";
            break;
        case "33":
            namaProdi = "Hubungan Internasional";
            break;
        case "41":
            namaProdi = "Teknik Sipil";
            break;
        case "42":
            namaProdi = "Arsitektur";
            break;
        case "51":
            namaProdi = "Matematika";
            break;
        case "52":
            namaProdi = "Fisika";
            break;
        case "53":
            namaProdi = "Informatika";
            break;
            default:
            namaProdi = "Prodi Tidak Diketahui";
    }

    return `Mahasiswa a.n ${name} terdaftar sebagai mahasiswa Program Studi ${namaProdi} pada ${namaFakultas} sejak tahun ${tahunTerdaftar}.`;
}
