<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Sample articles data (no database needed).
     */
    private function getArticles(): array
    {
        return [
            [
                'slug' => 'cara-merawat-lcd-smartphone',
                'title' => 'Cara Merawat LCD Smartphone Agar Tetap Awet',
                'excerpt' => 'LCD smartphone adalah komponen vital yang perlu dijaga. Berikut tips merawat layar smartphone Anda agar tetap jernih dan bebas kerusakan.',
                'image' => '/images/articles/article-1.jpg',
                'date' => '2026-04-10',
                'author' => 'Tim RLB',
                'category' => 'Tips & Trik',
                'content' => '<p>LCD (Liquid Crystal Display) adalah komponen paling penting dari smartphone Anda. Layar yang rusak tidak hanya mengganggu tampilan, tetapi juga bisa mempengaruhi fungsionalitas touchscreen.</p>

<h3>1. Gunakan Tempered Glass Berkualitas</h3>
<p>Investasi pada tempered glass berkualitas tinggi adalah langkah pertama yang wajib dilakukan. Tempered glass premium dengan ketebalan 0.33mm dapat menyerap benturan dan mencegah goresan langsung pada layar LCD Anda.</p>

<h3>2. Gunakan Case/Casing Pelindung</h3>
<p>Selain tempered glass, casing smartphone yang memiliki lip (bibir) lebih tinggi dari layar sangat penting. Ini mencegah layar bersentuhan langsung dengan permukaan saat smartphone diletakkan terbalik.</p>

<h3>3. Hindari Paparan Sinar Matahari Langsung</h3>
<p>LCD sangat sensitif terhadap suhu tinggi. Paparan sinar matahari langsung dalam waktu lama bisa menyebabkan dead pixel, perubahan warna, dan kerusakan backlight. Jangan tinggalkan smartphone di dashboard mobil!</p>

<h3>4. Bersihkan Layar dengan Benar</h3>
<p>Gunakan kain microfiber lembut dan cairan pembersih khusus layar. Hindari tisu kasar, alkohol berkonsentrasi tinggi, atau bahan abrasif yang dapat mengikis lapisan oleophobic.</p>

<h3>5. Atur Kecerahan dengan Bijak</h3>
<p>Menggunakan kecerahan maksimal terus-menerus bisa memperpendek umur backlight LCD. Gunakan auto-brightness atau atur secara manual sesuai kondisi pencahayaan sekitar.</p>',
            ],
            [
                'slug' => 'perbedaan-lcd-original-vs-kw',
                'title' => 'Perbedaan LCD Original vs KW: Mana yang Lebih Baik?',
                'excerpt' => 'Memilih LCD pengganti untuk smartphone? Kenali perbedaan antara LCD original, OEM, dan KW agar tidak salah pilih saat service.',
                'image' => '/images/articles/article-2.jpg',
                'date' => '2026-04-05',
                'author' => 'Tim RLB',
                'category' => 'Edukasi',
                'content' => '<p>Saat LCD smartphone Anda rusak dan perlu diganti, salah satu keputusan terpenting adalah memilih kualitas LCD pengganti. Berikut penjelasan lengkapnya.</p>

<h3>LCD Original (Genuine)</h3>
<p>LCD original adalah komponen yang 100% sama dengan yang dipasang pabrik. Diproduksi oleh manufacturer resmi (Samsung Display, BOE, LG Display). Memiliki kualitas warna, kecerahan, dan responsivitas terbaik. Harganya premium, tetapi menjamin pengalaman yang sama seperti baru.</p>

<h3>LCD OEM (A+ Grade)</h3>
<p>LCD OEM diproduksi oleh pabrik pihak ketiga menggunakan standar yang mendekati original. Kualitasnya 85-95% dari original dengan harga yang lebih terjangkau. Ini adalah pilihan terbaik untuk keseimbangan antara harga dan kualitas. Di RLB, kami menggunakan LCD grade ini sebagai standar minimum.</p>

<h3>LCD KW (Copy/TFT)</h3>
<p>LCD KW adalah produk copy dengan kualitas rendah. Biasanya memiliki warna yang pudar, kecerahan lebih rendah, touch kurang responsif, dan umur pakai lebih pendek. Meski murah, LCD KW sering menyebabkan masalah baru dalam beberapa bulan.</p>

<h3>Rekomendasi Kami</h3>
<p>Di Restorasi Layar Bersama, kami selalu merekomendasikan LCD Original atau OEM A+ Grade. Kami tidak menggunakan LCD KW karena ingin memastikan setiap pelanggan mendapatkan hasil terbaik dengan garansi yang terjamin.</p>',
            ],
            [
                'slug' => 'tanda-lcd-smartphone-mulai-rusak',
                'title' => '5 Tanda LCD Smartphone Mulai Rusak',
                'excerpt' => 'Jangan tunggu sampai layar benar-benar mati! Kenali tanda-tanda awal kerusakan LCD smartphone agar bisa ditangani lebih cepat.',
                'image' => '/images/articles/article-3.jpg',
                'date' => '2026-03-28',
                'author' => 'Tim RLB',
                'category' => 'Tips & Trik',
                'content' => '<p>Kerusakan LCD tidak selalu terjadi secara tiba-tiba. Sering kali ada tanda-tanda awal yang bisa dikenali. Semakin cepat ditangani, semakin kecil biaya perbaikannya.</p>

<h3>1. Munculnya Dead Pixel</h3>
<p>Dead pixel adalah titik kecil di layar yang tidak menampilkan warna atau selalu menampilkan satu warna (biasanya hijau, merah, atau biru). Satu-dua dead pixel mungkin tidak terlalu mengganggu, tapi jika sudah mulai menyebar, itu tanda LCD mulai rusak.</p>

<h3>2. Layar Berkedip (Flickering)</h3>
<p>Jika layar berkedip-kedip saat digunakan, ini bisa menandakan masalah pada koneksi kabel flex LCD atau kerusakan backlight. Segera bawa ke teknisi sebelum layar mati total.</p>

<h3>3. Garis-Garis pada Layar</h3>
<p>Garis horizontal atau vertikal yang muncul di layar adalah tanda klasik kerusakan LCD. Ini biasanya disebabkan oleh benturan, tekanan berlebih, atau kerusakan pada IC driver layar.</p>

<h3>4. Touch Screen Tidak Responsif di Area Tertentu</h3>
<p>Jika beberapa area layar tidak merespons sentuhan, kemungkinan besar digitizer (lapisan touchscreen) sudah mulai rusak. Pada smartphone modern, digitizer terintegrasi dengan LCD sehingga keduanya perlu diganti bersamaan.</p>

<h3>5. Perubahan Warna atau Bercak</h3>
<p>Munculnya bercak kekuningan, kehijauan, atau area gelap di layar menandakan kebocoran cairan LCD atau kerusakan panel. Ini biasanya irreversible dan memerlukan penggantian panel LCD.</p>',
            ],
            [
                'slug' => 'estimasi-biaya-ganti-lcd-2026',
                'title' => 'Estimasi Biaya Ganti LCD Smartphone 2026',
                'excerpt' => 'Berapa biaya ganti LCD smartphone di tahun 2026? Simak estimasi harga untuk berbagai merek populer di Indonesia.',
                'image' => '/images/articles/article-4.jpg',
                'date' => '2026-03-20',
                'author' => 'Tim RLB',
                'category' => 'Info Harga',
                'content' => '<p>Biaya penggantian LCD smartphone bervariasi tergantung merek, model, dan kualitas LCD yang digunakan. Berikut estimasi harga terbaru di tahun 2026.</p>

<h3>Samsung Galaxy Series</h3>
<p>Samsung Galaxy A Series: Rp 300.000 - Rp 800.000 (OEM A+)<br>Samsung Galaxy S Series: Rp 1.500.000 - Rp 4.000.000 (Original AMOLED)<br>Samsung Galaxy Z Fold/Flip: Rp 3.000.000 - Rp 8.000.000 (Original)</p>

<h3>iPhone Series</h3>
<p>iPhone SE/XR: Rp 500.000 - Rp 1.200.000<br>iPhone 13/14/15 Series: Rp 1.000.000 - Rp 3.500.000<br>iPhone 16 Pro Max: Rp 3.000.000 - Rp 5.000.000</p>

<h3>Xiaomi / Redmi / POCO</h3>
<p>Redmi Note Series: Rp 200.000 - Rp 500.000<br>Xiaomi 14/15 Series: Rp 800.000 - Rp 2.000.000<br>POCO Series: Rp 250.000 - Rp 600.000</p>

<h3>OPPO / Vivo / Realme</h3>
<p>OPPO A Series / Vivo Y Series: Rp 200.000 - Rp 500.000<br>OPPO Reno / Vivo V Series: Rp 500.000 - Rp 1.200.000<br>Find X / X Series: Rp 1.500.000 - Rp 3.500.000</p>

<h3>Catatan Penting</h3>
<p>Harga di atas adalah estimasi dan dapat berubah tergantung ketersediaan sparepart. Di RLB, kami menawarkan harga transparan dengan diagnosis gratis. Hubungi kami untuk mendapatkan penawaran terbaik!</p>',
            ],
        ];
    }

    public function home()
    {
        $articles = array_slice($this->getArticles(), 0, 3);
        return view('home', compact('articles'));
    }

    public function about()
    {
        return view('about');
    }

    public function howItWorks()
    {
        return view('how-it-works');
    }

    public function services()
    {
        return view('services');
    }

    public function articles()
    {
        $articles = $this->getArticles();
        return view('articles.index', compact('articles'));
    }

    public function articleShow(string $slug)
    {
        $articles = $this->getArticles();
        $article = collect($articles)->firstWhere('slug', $slug);

        if (!$article) {
            abort(404);
        }

        $otherArticles = collect($articles)->where('slug', '!=', $slug)->take(2)->all();

        return view('articles.show', compact('article', 'otherArticles'));
    }

    public function contact()
    {
        return view('contact');
    }
}
