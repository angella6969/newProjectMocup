@extends('layout.main')
@section('container')
    <div id="map"></div>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('map');

            // Mendapatkan lokasi GPS dari perangkat
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        var latitude = position.coords.latitude;
                        var longitude = position.coords.longitude;

                        // Inisialisasi peta dengan lokasi GPS
                        map.setView([latitude, longitude], 15);

                        // Tambahkan layer tile dari OpenStreetMap
                        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 19,
                            attribution: '© OpenStreetMap'
                        }).addTo(map);
                    },
                    function(error) {
                        // Penanganan kesalahan jika tidak dapat mendapatkan lokasi GPS
                        console.error('Error getting GPS location:', error.message);

                        // Inisialisasi peta dengan koordinat default jika gagal mendapatkan lokasi GPS
                        map.setView([51.505, -0.09], 13);

                        // Tambahkan layer tile dari OpenStreetMap
                        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 19,
                            attribution: '© OpenStreetMap'
                        }).addTo(map);
                    }
                );
            } else {
                // Penanganan jika Geolocation API tidak didukung oleh peramban
                console.error('Geolocation is not supported by your browser.');

                // Inisialisasi peta dengan koordinat default jika tidak didukung Geolocation API
                map.setView([51.505, -0.09], 13);

                // Tambahkan layer tile dari OpenStreetMap
                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '© OpenStreetMap'
                }).addTo(map);
            }
        });
    </script>
@endsection
