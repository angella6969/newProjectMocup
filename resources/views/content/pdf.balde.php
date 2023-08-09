<!DOCTYPE html>
<html>
<head>
    <title>PDF Popup</title>
    <style>
        /* Isikan gaya CSS sesuai kebutuhan */
    </style>
</head>
<body>
    <button id="open-pdf">Buka PDF</button>
    <div id="pdf-popup" style="display: none;">
    <embed src="{{ asset('public/PDF/Spd_2023-08-04.pdf') }}" width="100%" height="600px" type="application/pdf">

    </div>

    <script>
        document.getElementById('open-pdf').addEventListener('click', function() {
            document.getElementById('pdf-popup').style.display = 'block';
        });
    </script>
</body>
</html>
