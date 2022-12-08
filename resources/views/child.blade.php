@extends('parent', [
    'title' => 'judul dari child',
    'icon' => 'profile.jpg'
    ])

@section("content")

    @include("components.pilihrole")
    @php 
        $users = [
            [
                "nama" => "Enji",
                "foto" => "https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/07/30/2502942634.jpeg",
                "bio" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ligula tellus, ultrices quis lorem sed, mollis porttitor nunc. Donec vel nulla nulla. Etiam elementum felis dictum nisl bibendum blandit.",
                "active" => true,
                "alamat" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ",
                "role" => "admin"
            ],
            [
                "nama" => "Ichsan",
                "foto" => "https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/07/30/2502942634.jpeg",
                "bio" => "consectetur adipiscing elit. Vivamus ligula tellus, ultrices quis lorem sed, mollis porttitor nunc. Donecmollis porttitor nunc. Donec vel nulla nulla. Etiam elementum felis dictum nisl bibendum blandit.",
                "active" => true,
                "alamat" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ",
                "role" => "admin"
            ],
            [
                "nama" => "Rendi",
                "foto" => "https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/01/18/1223031425.jpeg",
                "bio" => "consectetur adipiscing elit. Vivamus ligula tellus, ultrices quis lorem sed, mollis porttitor nunc. Donecc. Donec vel nulla nulla. Etiam elementum felis dictum nisl bibendum blandit.",
                "active" => false,
                "alamat" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ",
                "role" => "admin"
            ],
            [
                "nama" => "Pak RT",
                "foto" => "https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/01/18/1223031425.jpeg",
                "bio" => "lor sit ametffr sit amet, consectetur adipiscing elit. Vivamus ligula tellus, ultrices quis lorem sed, mollis porttitor nunc. Donec vel nulla nulla. Etiam elementum felis dictum nisl bibendum blandit.",
                "active" => true,
                "alamat" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ",
                "role" => "user"
            ],
            [
                "nama" => "Hanif",
                "foto" => "https://jagadviral.com/wp-content/uploads/2022/01/ghozali-jual-foto-selfie-di-nft-dapat-rp12-6-miliar-ternyata-begini-cara-kerjanya-USz4uJ39yh.jpg",
                "bio" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ligula tellus, ultrices quis lorem sed, mollis porttitor nunc. Donec vel nulla nulla. Etiam elementum felis dictum nisl bibendum blandit.",
                "active" => false,
                "alamat" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ",
                "role" => "admin"
            ],
            [
                "nama" => "Firman",
                "foto" => "https://jagadviral.com/wp-content/uploads/2022/01/ghozali-jual-foto-selfie-di-nft-dapat-rp12-6-miliar-ternyata-begini-cara-kerjanya-USz4uJ39yh.jpg",
                "bio" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ligula tellus, ultrices quis lorem sed, mollis porttitor nunc. Donec vel nulla nulla. Etiam elementum felis dictum nisl bibendum blandit.",
                "active" => true,
                "alamat" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ",
                "role" => "user"
            ],
            [
                "nama" => "Diah",
                "foto" => "https://jagadviral.com/wp-content/uploads/2022/01/ghozali-jual-foto-selfie-di-nft-dapat-rp12-6-miliar-ternyata-begini-cara-kerjanya-USz4uJ39yh.jpg",
                "bio" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ligula tellus, ultrices quis lorem sed, mollis porttitor nunc. Donec vel nulla nulla. Etiam elementum felis dictum nisl bibendum blandit.",
                "active" => true,
                "alamat" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ",
                "role" => "admin"
            ],
            [
                "nama" => "Farid",
                "foto" => "profile.jpg",
                "bio" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ligula tellus, ultrices quis lorem sed, mollis porttitor nunc. Donec vel nulla nulla. Etiam elementum felis dictum nisl bibendum blandit.",
                "active" => true,
                "alamat" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ",
                "role" => "user"
            ],
            [
                "nama" => "Abdul",
                "foto" => "https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/07/30/2502942634.jpeg",
                "bio" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ligula tellus, ultrices quis lorem sed, mollis porttitor nunc. Donec vel nulla nulla. Etiam elementum felis dictum nisl bibendum blandit.",
                "active" => true,
                "alamat" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ",
                "role" => "admin"
            ],
            [
                "nama" => "Daffa",
                "foto" => "https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/07/30/2502942634.jpeg",
                "bio" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ligula tellus, ultrices quis lorem sed, mollis porttitor nunc. Donec vel nulla nulla. Etiam elementum felis dictum nisl bibendum blandit.",
                "active" => true,
                "alamat" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ",
                "role" => "user"
            ],
            [
                "nama" => "Tegar",
                "foto" => "https://jagadviral.com/wp-content/uploads/2022/01/ghozali-jual-foto-selfie-di-nft-dapat-rp12-6-miliar-ternyata-begini-cara-kerjanya-USz4uJ39yh.jpg",
                "bio" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ligula tellus, ultrices quis lorem sed, mollis porttitor nunc. Donec vel nulla nulla. Etiam elementum felis dictum nisl bibendum blandit.",
                "active" => true,
                "alamat" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ",
                "role" => "user"
            ]
        ];

        $filter = [
            "active" => true,
            "role" => $role
        ];
    @endphp

    @include("components.card", [
        "users" => $users,
        "filter" => $filter
        ])
@endsection