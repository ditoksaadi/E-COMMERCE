<?php

namespace Database\Seeders;

use App\Models\Stok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Stok::create([
            "id" => "1",
            "kode" => "101",
            "nama" => "IPHONE 12PRO 128G",
            "idsatuan" => "2",
            "idkategori" => "1",
            "saldoawal" => "100000000",
            "hargabeli" => "8000000",
            "hargajual" => "8500000",
            "hargamodal" => "8000000",
            "foto" => '["public\/product\/\/1I0ceIR7HfeuPrWlbaP27ZnsXVbfoTQV1dAjhOYU.jpg","public\/product\/\/y9TDdZerhJ94PYO4LXGmFxEng78veJAK0220H79G.jpg","public\/product\/\/tOASnHnmdAhn77s033VL83rQI29mQ0Mez70iZZHF.jpg","public\/product\/\/YlCe5VTPgXeha5BQpgTJYOrIgz6AL7RAtDwt3vEq.jpg"]', // mengkonversi array menjadi string JSON
            "desk" => "iPhone 12. Layar Super Retina XDR 6,1 inci yang begitu cerah.(1) Ceramic Shield dengan ketahanan jatuh empat kali lebih baik.(2) Fotografi pencahayaan rendah yang menakjubkan dengan mode Malam di semua kamera. Mampu merekam, mengedit, dan memutar video sekelas sinema dengan Dolby Vision. Chip A14 Bionic yang andal. Dan aksesori MagSafe baru untuk kemudahan pemasangan dan pengisian daya nirkabel yang lebih cepat.(3) Saatnya bersenang-senang.

            Poin-poin fitur:

            • Layar Super Retina XDR 6,1 inci(1)

            • Ceramic Shield, lebih tangguh dari kaca ponsel pintar mana pun

            • Chip A14 Bionic, chip paling cepat yang pernah ada di ponsel pintar

            • Sistem kamera ganda canggih dengan kamera Ultra Wide dan Wide 12 MP;
            mode Malam, Deep Fusion,

            Smart HDR 3, perekaman HDR 4K Dolby Vision

            • Kamera depan TrueDepth 12 MP dengan mode Malam, perekaman HDR 4K Dolby Vision

            • Level ketahanan air IP68 terdepan di industri(4)

            • Mendukung aksesori MagSafe untuk kemudahan pemasangan dan pengisian daya nirkabel yang lebih cepat(3)

            • iOS 14 dengan widget yang didesain ulang di Layar Home, Perpustakaan App yang sepenuhnya baru, Cuplikan App, dan banyak lagi ",
            "pajang" => "ON",
            "saldoakhir" => "2000000",
        ]);


        Stok::create([
            "id" => "2",
            "kode" => "102",
            "nama" => "IPAD PRO 256 GEN 6",
            "idsatuan" => "2",
            "idkategori" => "3",
            "saldoawal" => "100000000",
            "hargabeli" => "15000000",
            "hargajual" => "14750000",
            "hargamodal" => "8000000",
            "foto" => '["public\/product\/\/bVF3DulrHfQejehod8JWiUpqhs0K5jkCUMOEyeHr.jpg","public\/product\/\/Svuw1zjZ043lCy0hEI3fTWMxdVwr7IDjTIJci6Tf.jpg","public\/product\/\/hhigoL3i48Ev8WZwRJrIOBL9g9EWV2FHEflFgKSM.jpg","public\/product\/\/LLm1baSsoAdELBcjzhpe59ycIYPqa8j2IlreBxaw.jpg"]', // mengkonversi array menjadi string JSON
            "desk" => "iPad Pro. Dengan performa yang menakjubkan, konektivitas nirkabel super cepat, dan pengalaman Apple Pencil generasi berikutnya. Ditambah, fitur produktivitas dan kolaborasi baru yang andal di iPadOS 16. iPad Pro adalah pengalaman iPad terbaik.


            Isi Kotak :

            • iPad dengan iPadOS 16.
            • Kabel USB-C (1 meter).
            • Adaptor Daya USB-C 20 W.
            • Buku Manual dan dokumentasi lain.
            ",
            "pajang" => "ON",
            "saldoakhir" => "2000000",
        ]);

        Stok::create([
            "id" => "3",
            "kode" => "103",
            "nama" => "Headphone P47
            ",
            "idsatuan" => "2",
            "idkategori" => "3",
            "saldoawal" => "100000000",
            "hargabeli" => "8000000",
            "hargajual" => "8500000",
            "hargamodal" => "8000000",
            "foto" => '["public\/product\/\/ztN6KIEBGJMl8b99OlQqttKxoGz7el1xxWpbcDe6.jpg","public\/product\/\/dkyi0cl6V7Q3tPwFsH7bkdwEvfiqdFlURAOKLmck.jpg","public\/product\/\/uve1AHwuaHkDPR5DP5qu9ghovpRo8QwSDnhuWugM.jpg","public\/product\/\/AaCnIM57f3tjBrJ5PLz0Wz414CMuuMzpGUXTPW8m.jpg"]', // mengkonversi array menjadi string JSON
            "desk" => "HEADPHONE VERSI KABEL
            * Hanya bisa digunakan dengan kabel audio.
            * Tidak ada mode radio fm maupun memory card
            * Penggunaan tidak perlu di charger ( jadi tidak perlu baterai habis )
            * Tidak terdapat tombol penggunaan ( Putar/jeda, next lagu, volume dll bisa diatur lwt perangkat yang digunakan ).

            Package Includes Versi Kabel :
            1 x Cable Headphone
            1 x Audio jack Cable 3.5mm

            #Phone #Earphones #MobilePhone #PhoneAccessories #Audio #Headset #headphonejbl #jblheadset #jblearphone #headsetsuperbass #headsetjblbass
            ",
            "pajang" => "ON",
            "saldoakhir" => "2000000",
        ]);

        Stok::create([
            "id" => "4",
            "kode" => "104",
            "nama" => "Macbook Pro 13",
            "idsatuan" => "2",
            "idkategori" => "2",
            "saldoawal" => "10000000",
            "hargabeli" => "8000000",
            "hargajual" => "8500000",
            "hargamodal" => "8000000",
            "foto" => '["public\/product\/\/RqTgFdxdGgySmVKV4Hj4kwgaDF1CUBzgYy8gc7nm.jpg","public\/product\/\/saLoUdURbrQmdZxKKnwakWqtAUYECcQYumDCzK62.jpg","public\/product\/\/VJCGPKdFJrZsyKNBoTY59FKIqJ8Q9HmWawJOUTJj.jpg","public\/product\/\/dftTshcPGXqqIgvd8TQ8cXkD8MXnQTwLKDGdBCYs.jpg"]', // mengkonversi array menjadi string JSON
            "desk" => "Spesifikasi :
                - prosesor : intel core i5 2.3ghz/core i7 2.7 ghz
                - Ram : 4gb/8gb/16gb
                - penyimpanan : hardisk 500gb/ssd 256gb/ssd 512gb/hardisk 1000gb
                - Vga  : intel hd graphich 3000
                - Layar : 13.3 inc
                - keyboard backlight
                - macos dan aplikasi
                - dll. Lan, headphone, usb , wifi, camera, Thunderbolt

                Kondisi :
                - fungsi normal
                - fisik oke, bekas pemakaian
                - batrai masih normal
            ",
            "pajang" => "ON",
            "saldoakhir" => "2000000",
        ]);

        Stok::create([
            "id" => "5",
            "kode" => "105",
            "nama" => "AIRPODS PRO BEN 2",
            "idsatuan" => "2",
            "idkategori" => "3",
            "saldoawal" => "100000000",
            "hargabeli" => "6000000",
            "hargajual" => "5000000",
            "hargamodal" => "8000000",
            "foto" => '["public\/product\/\/9iOEIc6Adc3w816GEMXPta3jMyPHCUXiwpXNaqvj.jpg","public\/product\/\/Ix8LnegbWhnq8jXVQOg3vvtkMLKvUVIM04uL2tEL.jpg","public\/product\/\/bJFgzfBoIwX1rgmgv06KQRcKNzAQ7U2AbsxuIi49.jpg","public\/product\/\/CJNoNTX4fQ3gUKLWIPJ6kKtdewDP7mcOVxyAjPS7.jpg"]', // mengkonversi array menjadi string JSON
            "desk" => "AirPods Pro dilengkapi Peredam Kebisingan Aktif hingga 2x lebih tinggi, mode Transparansi, dan kini Audio Adaptif, yang secara otomatis menyesuaikan kontrol kebisingan untuk Anda guna memberikan pengalaman mendengarkan terbaik di berbagai lingkungan dan interaksi di sepanjang hari.",
            "pajang" => "ON",
            "saldoakhir" => "2000000",
        ]);

    }
}
