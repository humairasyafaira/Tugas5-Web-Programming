<?php 

$film =[
    [
        'Poster'=> 'film1.jpg',
        'Judul'=> 'Karigurashi no Arietty',
        'Tahun'=> '2010',
        'Genre'=>['Animation,',' Advanture,',' Drama'],
        'Pemeran Utama'=>['Amy Poehler,',' Will Arnett,',' Mirai Shida'],
        'Sutradara'=>['Hiromasa Yonebayashi']
   ],
   [
        'Poster'=> 'film2.jpg',
        'Judul'=> 'Alice in Borderland',
        'Tahun'=> '2020',
        'Genre'=>['Action,',' Drama,',' Mystery'],
        'Pemeran Utama'=>['Kento Yamazaki,',' Tao Tsuchiya,',' Nijirô Murakami'],
        'Sutradara'=>['Shinsuke Sato']
    ],
    [
        'Poster'=> 'film3.jpg',
        'Judul'=> 'Tenki no ko',
        'Tahun'=> '2019',
        'Genre'=>['Animation,',' Drama,',' Fantacy'],
        'Pemeran Utama'=>['Kotaro Daigo,',' Nana Mori,',' Tsubasa Honda'],
        'Sutradara'=>['Makoto Shinkai']
   ],
   [
        'Poster'=> 'film4.jpg',
        'Judul'=> 'Magic Kaito',
        'Tahun'=> '2010-2012',
        'Genre'=>['Animation,',' Advanture,',' Comedy'],
        'Pemeran Utama'=>['Kappei Yamaguchi,',' Ayumi Fujimura,',' Unsho Ishizuka'],
        'Sutradara'=>['Gosho Aoyama']
    ],
    [
        'Poster'=> 'film5.jpg',
        'Judul'=> '20th Century Girl',
        'Tahun'=> '2022',
        'Genre'=>['Drama,',' Romance'],
        'Pemeran Utama'=>['Kim Yoo-jeong,',' Han Hyo-joo,',' Yuuki Luna'],
        'Sutradara'=>['Woo-ri Bang']
    ],
    [
        'Poster'=> 'film6.jpg',
        'Judul'=> 'Avatar: The Way of Water',
        'Tahun'=> '2022',
        'Genre'=>['Action','Drama,',' Fantacy'],
        'Pemeran Utama'=>['Sam Worthington,',' Zoe Saldana,',' Sigourney Weaver'],
        'Sutradara'=>['James Cameron']
    ],
    [
        'Poster'=> 'film7.jpg',
        'Judul'=> 'Detective Conan: The Bride of Halloween',
        'Tahun'=> '2022',
        'Genre'=>['Animation,',' Action,',' Crime'],
        'Pemeran Utama'=>['Minami Takayama,',' Chafurin,',' Toru Furuya'],
        'Sutradara'=>['Gosho Aoyama,',' Susumu Mitsunaka']
    ],
    [
        'Poster'=> 'film8.jpg',
        'Judul'=> 'Death Note: Desu noto',
        'Tahun'=> '2015',
        'Genre'=>['Drama,',' Crime,',' Fantacy'],
        'Pemeran Utama'=>['Masataka Kubota,',' Kento Yamazaki,',' Mio Yuki'],
        'Sutradara'=>['Ryûichi Inomata,',' Ryo Nishimura,',' Marie Iwasaki']
    ],
    [
        'Poster'=> 'film9.jpg',
        'Judul'=> 'The Door Into Summer',
        'Tahun'=> '2021',
        'Genre'=>['Sci-Fi'],
        'Pemeran Utama'=>['Kento Yamazaki,',' Kaya Kiyohara'],
        'Sutradara'=>['Takahiro Miki']
    ],
    [
        'Poster'=> 'film10.jpg',
        'Judul'=> 'Our Times',
        'Tahun'=> '2015',
        'Genre'=>['Comedy,',' Romance'],
        'Pemeran Utama'=>['Vivian Sung,',' Talu Wang,',' Dino Lee'],
        'Sutradara'=>['Yu Shan Chen']
    ]
        
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan film</title>
    <style>
    ul li img {
        width:90px;
        height:120px;
    }
       

    </style>
</head>
<body>

<?php foreach( $film as $flm) { ?>

<ul>
    <li>
        <img src="img/<?= $flm['Poster']; ?>" alt="">
    </li>
    <li>Judul : <?= $flm ['Judul']; ?></li>
    <li>Tahun : <?= $flm ['Tahun']; ?></li>
    <li>Genre : 
        <?php foreach ($flm ['Genre'] as $f) {
            echo $f;
        } ?>
    </li>
    <li>Pemeran Utama : 
        <?php foreach ($flm ['Pemeran Utama'] as $f) {
            echo $f;
        } ?>
    </li>
    <li>Sutradara : 
        <?php foreach ($flm ['Sutradara'] as $f) {
            echo $f;
        } ?>
    </li>
</ul>
    <?php } ?>


</body>
</html>