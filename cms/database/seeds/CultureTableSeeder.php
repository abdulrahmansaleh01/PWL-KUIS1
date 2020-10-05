<?php

use Illuminate\Database\Seeder;

class CultureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Culture::insert([
            [
                'intro' => 'Kesenian Ludruk adalah salah satu kesenian tradisional Jawa Timur yang berbentuk drama. Disajikan di atas panggung dengan mengangkat tema kehidupan sehari-hari, cerita perjuangan dan lain sebagainya. Kesenian ini juga biasa diselingi lawakan dan di iringi alunan musik gamelan Jawa, dialog atau monolog.',
                'title' => 'Ludruk, Jawa Timur – Seni Drama Ringan, Lugas dan Sarat Lawakan',
                'featured_image' => 'https://blogkulo.com/wp-content/uploads/2017/11/Kesenian-Ludruk.jpg.webp',
                'paragraph1' => 'Salah satu yang menarik dari Ludruk adalah bahasanya lugas sehingga mudah diserap oleh kalangan non-intelek. Biasanya pada permulaan drama ini akan di awali dengan Tari Remo dan diselingi dengan pementasan seorang tokoh yang memerankan Pak Sakera (Tokoh Jagoan Madura).',
                'paragraph2' => 'Mengenai asal muasal kata Ludruk, Menurut Dukut Imam Widodo pada bukunya Soerabaia Tempo Doeloe, ludruk berasal dari bahasa Belanda. Pada masa itu banyak anak-anak Belanda muda yang senang menonton. Mereka berkata kepada teman-temanya,“Mari kita leuk en druk.” Artinya yang penting enjoy, happy sambil nonton pertunjukan yang lucunya luar biasa ini, begitu kira-kira maksudnya.

                Kalau demikian halnya, kesenian itu sudah ada sebelumnya, tetapi belum punya nama “baku”. Lalu lahirlah ucapan bahasa Belanda “Leuk en Druk” itu. Lama kelamaan, leuk en druk diadopsi menjadi bahasa sini ludruk.',
                'category' => 'kesenian',
                'publish_at' => '1 Oktober 2020',
                'author' => 'Abdul Rahman Saleh'
            ],
            [
                'intro' => 'Batik Pekalongan. Berada di jalan Pantura penghubung Jakarta, Semarang dan Surabaya, Pekalongan tampil sebagai salah satu kota pusat pertumbuhan ekonomi di Jawa Tengah. Sebuah kota menakjubkan dalam balutan nuansa yang religius. Hadir dengan citarasa budaya nan khas, termasuk adat tradisi dan kulinernya.',
                'title' => 'Batik Pekalongan – Ciri Khas Motif dan Sejarah Perbatikan di Kota Pekalongan',
                'featured_image' => 'https://blogkulo.com/wp-content/uploads/2020/04/Sejarah-Ciri-Khas-Batik-Pekalongan-Batik-Jlamprang.jpg',
                'paragraph1' => 'Secara geografis, batik di daerah Pekalongan masuk dalam kategori batik pesisir. Batik pesisir secara singkat dimaknai sebagai batik yang tidak lagi berpegang pada pakem seperti yang mengikat batik pedalaman atau batik keraton. Namun, diketahui bahwa semua jenis batik di Indonesia bermuara atau berasal dari dalam tembok keraton.',
                'paragraph2' => 'Motif batiknya sekilas mirip dengan Batik Solo dan Batik Jogja. Sebagai pembeda, batik daerah Pekalongan lebih bebas dan dinamis untuk dimodifikasi. Variasi warnanya sangat kaya yang terkadang sangat kontras jika dibandingkan dengan corak batik pedalaman, baik batik gaya Surakarta (solo) maupun gaya Yogyakarta.
                Selain itu, perbatikan di Pekalongan juga mendapat pengaruh keraton Cirebon. Hal ini terkait dengan masa Kesultanan Cirebon yang selanjutnya mencipta hubungan kultural-lokal. Dalam hal ini kerajinan batiknya diperkaya ragam hias keramik Cina yang ada di Keraton Kasepuhan dan makam Raja-raja Cirebon di Gunungjati.
                Nuansa Batik Pekalongan juga dipengaruhi budaya luar, khususnya Cina dan Belanda. Batik Jlamprang bisa dikatakan sebagai motif batik paling populer, bahkan kini dijadikan nama jalan di Pekalongan
                ',
                'category' => 'Budaya',
                'publish_at' => '30 September 2020',
                'author' => 'Muthi Abdillah Saleh'
            ],
            [
                'intro' => 'Karapan Sapi adalah tradisi yang berasal dari Pulau Madura, Jawa Timur. Tradisi ini berupa perlombaan pacuan sepasang sapi yang menarik semacam kereta yang terbuat dari kayu.',
                'title' => 'Tradisi Karapan Sapi – Lomba Pacuan Sapi Tahunan di Pulau Madura, Jawa Timur',
                'featured_image' => 'https://blogkulo.com/wp-content/uploads/2017/12/Karapan-Sapi-Madura.jpg.webp',
                'paragraph1' => 'Kereta tersebut difungsikan sebagai tempat joki berdiri untuk mengendalikan sapi-sapi mereka dalam lomba adu cepat melawan pasangan-pasangan sapi lainnya. Lomba pacuan biasanya berlangsung sekitar 10 detik hingga satu menit pada trek pacuan sepanjang kira-kira 100 meter.
                Perlombaan ini bermula dari ide bercocok tanam oleh Syeh Ahmad Baidawi atau Pangeran Katandur (seorang ulama sumenep).
                
                Mengingat keadaan tanah Madura yang kurang subur untuk lahan pertanian, ulama tersebut memperkenalkan cara bercocok tanam dengan menggunakan sepasang bamboo ( Nanggala atau Sagala) yang ditarik dengan dua ekor sapi.
                ',
                'paragraph2' => 'Cara tersebut juga bertujuan untuk memperoleh sapi-sapi yang kuat dalam membajak tanah. Melalui gagasan itu, selanjutnya masyarakat Madura mencoba memelihara sapi dan menerapkan cara bercocok tanam yang baru.
                Kegiatan orang Madura ini lama-kelamaan menimbulkan adanya Tradisi Karapan Sapi yang rutin digelar setiap tahun setelah musim panen habis.
                
                Tradisi ini biasanya didahului dengan mengarak pasangan-pasangan sapi mengelilingi arena pacuan dengan diiringi musik saronen (Musik Tradisional Madura).',
                'category' => 'Tradisi',
                'publish_at' => '29 September 2020',
                'author' => 'Ghossan Azim'
            ],
            [
                'intro' => 'Tari Remo (Ngremo) adalah tarian selamat datang dari Jawa Timur. Disebut juga Tari Ludruk karena awalnya difungsikan sebagai pembuka kesenian Ludruk. Seiring perkembangannya, tari ini ditampilkan terpisah untuk menyambut tamu agung.',
                'title' => 'Tari Remo (Ngremo), Jawa Timur – Seni Tradisional Penyambut Tamu Agung',
                'featured_image' => 'https://blogkulo.com/wp-content/uploads/2017/11/Tari-Remo-Jawa-Timur.jpg.webp',
                'paragraph1' => 'Tari Remo pada permulaan sejarahnya secara khusus diperagakan oleh penari laki-laki untuk menampilkan sisi kemaskulinan. Karena, sebenarnya Remo adalah tari yang menceritakan tentang perjuangan seorang pangeran dalam medan laga.
                Meski demikian, seiring berjalannya waktu Remo menjadi lebih sering ditarikan oleh penari perempuan. Kenyataan tersebut kemudian memunculkan gaya tarian yang lain yang disebut Remo Putri atau Tari Remo gaya perempuan
                ',
                'paragraph2' => 'Tari Remo adalah kesenian tari tradisional yang membawakan tema keprajuritan. Dalam prakteknya tarian ini bisa dibawakan oleh satu atau banyak penari. Ekspresi yang dihadirkan penari lebih menampakkan sikap tegas, keras, cepat, serta sigap.
                Sikap-sikap tersebut merupakan gambaran ciri sikap umumnya masyarakat Jawa Timur yang lugas dan spontan dalam bertutur kata. Mereka juga dikenal cepat dalam bertindak, mudah sekali marah namun juga cepat pula mereda kemarahannya.
                Beragam peristiwa kepahlawanan serta kondisi lingkungan yang termuat dalam sejarah Jawa Timur turut membentuk tempramen keras. Kekhasan karakter masyarakatnya kemudian secara keseluruhan terangkat dalam kesenian, salah satunya dalam Tari Remo.',
                'category' => 'Tarian',
                'publish_at' => '28 September 2020',
                'author' => 'Ferika Putra'
            ],
            [
                'intro' => 'Kesenian Randai. Dalam kesejarahan budaya Minangkabau, dikenal beberapa seni tradisional yang berbentuk drama. Selain drama toonel atau basandiwara yang dikemudian hari turut melahirkan Tari Payung, ada juga kesenian Randai yang merupakan teater tradisional rakyat Minangkabau.',
                'title' => 'Randai, Sumatera Barat – Buah Kemesraan Budaya Melayu dan Minang',
                'featured_image' => 'https://blogkulo.com/wp-content/uploads/2018/03/Kesenian-Randai-Sumatera-Barat.jpg.webp',
                'paragraph1' => 'Kesenian ini juga sebagai bentuk permainan tradisional yang tumbuh, hidup dan berkembang di lingkungan masyarakat di Nagari-Nagari dalam wilayah Minangkabau di Sumatera Barat. Randai adalah karya seni unik yang dalam prakteknya menggabungkan berbagai unsur seni, seperti drama, tari, musik, sastra serta bela diri silat. Selain memuat pesan-pesan moral dan pendidikan, Randai juga mengandung unsur historis karena sebagian besar lakon adalah cerita klasik tentang kesejarahan Minangkabau. Pada tahun 2017 yang lalu, seni pertunjukan ini termasuk yang ditetapkan sebagai Warisan Budaya Tak Benda (WBTB) Indonesia oleh Kementrian Pedidikan dan Kebudayaan.',
                'paragraph2' => 'Setidaknya ada dua unsur pokok dalam kesenian Randai. Pertama, unsur penceritaan (kaba) yang dipaparkan melalui gurindam, dendang dan lagu dengan diiringi oleh alat musik tradisional Minang seperti salung, rebab, bansi, rebana dan lain-lain. Kedua, unsur laku dan gerak atau tari yang dibawakan melalui galombang yang bersumber dari gerakan silat tradisi Minang dengan berbagai variasi sesuai dengan gaya silat di masing-masing daerah. Sebagai sebuah drama, kesenian Randai dimainkan oleh beberapa orang berkelompok atau beregu. Dengan dituntun oleh seorang janang, para pemain membawakan cerita yang diambil dari kenyataan hidup yang ada di masyarakat. Beberapa cerita populer yang sering dibawakan meliputi Cindua Mato, Malin Deman, Anggun Nan Tongga dan lain sebagainya. Kesenian ini difungsikan sebagai hiburan yang biasa diadakan dalam pesta rakyat atau pada hari raya Idul Fitri.',
                'category' => 'Kesenian',
                'publish_at' => '27 September 2020',
                'author' => 'Muhammad Musthofa'
            ],
            [
                'intro' => 'Reog Ponorogo adalah salah satu kesenian tradisional Jawa Timur. Sebuah seni pertunjukan yang kental dengan hal-hal berbau mistik dan ilmu kebatinan yang diketahui berasal dari Kabupaten Ponorogo. Oleh karenanya lebih populer dengan sebutan Reog Ponorogo.',
                'title' => 'Reog Ponorogo, Jawa Timur – Seni Pertunjukan Tradisional Khas Ponorogo',
                'featured_image' => 'https://blogkulo.com/wp-content/uploads/2017/10/Reog-Ponorogo.jpg.webp',
                'paragraph1' => 'Identitas reog pun sangat melekat dengan kabupaten yang berbatasan langsung dengan propinsi Jawa Tengah tersebut. Selain mendapat julukan Kota Reog atau Bumi Reog, pernak-pernik reog juga banyak dijumpai, termasuk di gerbang pintu masuk Ponorogo.
                Sebenarnya, selain di Ponorogo, istilah Reog juga mewakili nama dari kesenian yang ada di Jawa barat dan Jawa Tengah. Di Jawa Barat, reog adalah nama dari kesenian tradisional Sunda yang dibawakan oleh empat orang dengan memainkan gendang.
                Adapun di Jawa tengah ada kesenian reog yang berasal dari Kabupaten Brebes yang dimainkan oleh dua orang bertopeng. Sayangnya seni reog yang ada di kedua provinsi tersebut telah menjadi pertunjukan yang sulit dijumpai karena jarangnya permintaan tampil.',
                'paragraph2' => 'Dalam pertunjukannya, mula-mula reog dibuka oleh 2-3 tarian pembuka. Tari pertama ditarikan oleh 6-8 penari pria berpakaian serba hitam yang lebih menggambarkan sosok singa pemberani. Penampilan selanjutnya biasa diisi oleh Tari Jaran Kepang.
                Tari Jaran Kepang atau Jathilan dibawakan oleh 6-8 gadis yang menaiki kuda mainan dari anyaman bambu atau biasa disebut Kuda Lumping. Pada sebagian pementasannya, setelah kedua tarian di atas, terkadang juga diikuti oleh penampilan Tari Bujang Ganong atau Ganongan.
                Ganongan dibawakan oleh seorang anak kecil yang umumnya beradegan lucu. Setelahnya baru ditampilkan adegan inti yang isinya bergantung kondisi di mana seni reog ditampilkan. Tidak seperti kesenian lain, adegan Reog Ponorogo tidaklah mengacu pada skenario yang tersusun rapi.
                Bisa dipastikan selalu ada interaksi antara pemain dan dalang. Bahkan tidak menutup kemungkinan penonton juga ikut serta. Tidak jarang seorang pemain yang sedang pentas, oleh karena kelelahan harus digantikan pemain lainnya.
                Penampilan Singo Barong adalah adegan penutup dari kesenian ini. Penarinya memakai topeng berbentuk kepala singa bermahkota bulu-bulu burung merak.
                Menariknya, berat topeng yang mencapai 50-60 kilogram itu ditopang hanya dengan gigi penari yang membawakannya. Kemampuan membawakan topeng selain diperoleh dengan latihan berat, juga dipercaya diperoleh dengan latihan spiritual seperti puasa dan tapa.',
                'category' => 'Kesenian',
                'publish_at' => '26 September 2020',
                'author' => 'Ahmad Syabi'
            ],
            [
                'intro' => 'Bahasa Walikan Malang. Bahasa dan masyarakat merupakan dua sisi mata uang yang tidak dapat dipisahkan. Mungkinkah ada bahasa tanpa masyarakat? atau bisakah masyarakat berkomunikasi tanpa bahasa?',
                'title' => 'Bahasa Walikan Malang – Bahasa Unik dalam Kebudayaan Malangan',
                'featured_image' => 'https://blogkulo.com/wp-content/uploads/2018/10/Bahasa-Walikan-Malang.jpg.webp',
                'paragraph1' => 'Sementara itu dalam kehidupan masyarakat yang berbudaya, bahasa senantiasa berkembang dan tidak menutup kemungkinan terjadi pergeseran. Perubahan tersebut kemudian turut menghadirkan fenomena dalam berbahasa, salah satunya adalah Bahasa Walikan oleh masyarakat Malang di Jawa Timur. Meski budaya Malang tetap pada konsepsi kebudayaan Arek, namun tetap mengusung kekhasannya sendiri, yakni Malangan. Dialek Malang atau dialek Malangan, dialek Ngalaman dan Boso Walikan (Osob Kiwalan) adalah satu hal yang mengukuhkan keunikannya.',
                'paragraph2' => 'Bahasa ini adalah dialek yang dituturkan dengan membalik posisi huruf pada kosakata bahasa Jawa atau bahasa Indonesia pada umumnya. Hanya saja, tidak membalikkan konsonan rangkap, afiks, dan gabungan suku kata yang tidak mungkin dibalik. Bahasa Walikan Malang hanyalah salah satu dari ragam bahasa Malang-an sebagai sebuah sistem lambang bunyi oleh sekelompok masyarakat untuk berinteraksi dan mengidentifikasi diri. Hal ini sejalan dengan kesejarahannya yang dimulai dari pemikiran para pejuang tempo dulu, yakni kelompok Gerilya Rakyat Kota (GRK). Bahasa dengan sedikit modifikasi ini dirasa perlu untuk menjamin kerahasiaan, efektivitas komunikasi sesama pejuang, selain sebagai pengenal kawan atau lawan.',
                'category' => 'Budaya',
                'publish_at' => '25 September 2020',
                'author' => 'Ainul Yaqin'
            ],
            [
                'intro' => 'Tradisi Ruwatan adalah salah satu bentuk upacara atau ritual penyucian yang hingga saat ini tetap dilestarikan oleh masyarakat Jawa. Budaya Ruwatan ini diberlakukan bagi orang yang Nandang Sukerta atau orang yang berada dalam dosa.',
                'title' => 'Ruwatan – Tradisi Ritual Penyucian Dosa Dalam Budaya Masyarakat Jawa',
                'featured_image' => 'https://blogkulo.com/wp-content/uploads/2018/06/Tradisi-Ruwatan-Jawa.jpg',
                'paragraph1' => 'Meruwat bisa berarti mengatasi atau menghindari sesuatu kesusahan bathin dengan cara mengadakan pertunjukan atau ritual. Umumnya ritual tersebut menggunakan media Wayang Kulit yang mengambil tema atau cerita Murwakala. Ruwat berasal dari istilah Ngaruati yang bermakna menjaga kesialan Dewa Batara.
                Upacara Ruwatan biasa dilakukan oleh masyarakat Jawa ketika mengalami kesialan hidup. Misalnya ketika anak sedang sakit, anak tunggal yang tidak memiliki adik maupun kakak, terkena sial, jauh jodoh, susah mencari kehidupan dan lain sebagainya.',
                'paragraph2' => 'Dalam Budaya Jawa, Tradisi Ruwatan dibagi dalam tiga golongan besar yakni ruwatan untuk diri sendiri, ruwatan untuk lingkungan dan ruwat untuk wilayah. Proses ruwat untuk perorangan umumnya dilaksanakan pada siang hari dengan memotong rambut sang sukerta (orang yang berada dalam dosa).
                Menurut kepercayaan orang Jawa, kesialan dan kemalangan sudah menjadi tanggungan dalang karena anak sukerta sudah menjadi anak dalang. Ritual ruwatan untuk lingkungan dilaksanakan di malam hari yang mana pemilihan waktu pelaksanaan pagelarannya ditentukan melalui perhitungan hari dan pasaran.
                Budaya ritual Ruwatan bisa dibilang sebagai upacara besar yang sakral. Dan, pastinya juga membutuhkan biaya yang tidak sedikit. Meskipun masih tetap dilestarikan hingga saat ini, ruwatan yang dilengkapi pagelaran wayang mungkin hanya bisa didapati dalam lingkup pedesaan atau pedusunan.',
                'category' => 'Tradisi',
                'publish_at' => '24 September 2020',
                'author' => 'Ikhsan Pratama'
            ]
        ]);

    }
}
