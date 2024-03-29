<?php
    class NilaiMahasiswa {
        var $nim, $matkul, $nilai; 

        function __construct($nim, $matkul, $nilai)
        {
            $this->nim = $nim;
            $this->matkul = $matkul;
            $this->nilai = $nilai;

        }

        function grade(){
            if($this->nilai >= 80 && $this->nilai <= 100) {
                return "A";
            } elseif($this->nilai >= 70 && $this->nilai <= 80) {
                return "B";
            } elseif($this->nilai >= 60 && $this->nilai <= 70) {
                return "C";
            } elseif($this->nilai >= 50 && $this->nilai <= 60) {
                return "D";
            } else{
                return "Tidak Lulus";
            }
        }
        function hasil(){
            if($this->grade() == "A") {
                return "Memuaskan";
            } elseif($this->grade() == "B") {
                return "Baik";
            } elseif($this->grade() == "C") {
                return "Cukup Baik";
            } elseif($this->grade() == "D") {
                return "Perbaiki";
            } else{
                return "Tidak Lulus";
            }
        }
        
    }

    

?>