<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <label for="id_siklus">Siklus</label>
    <select id="id_siklus">
        <option value="1">1</option>
        <option value="2">2</option>
    </select>

    <label for="kode_siklus">Kode Siklus</label>
    <select id="kode_siklus">
        <option value="A">A</option>
        <option value="B">B</option>
    </select>

    <label for="tahun">Tahun</label>
    <select id="tahun">
        <option value="2023">2023</option>
        <option value="2024">2024</option>
    </select>

    <script>
        $(document).ready(function() {
            $('#id_siklus').change(function() {
                var selectedValue = $(this).val();
                console.log('Selected value:', selectedValue);
                $('#kode_siklus').val(selectedValue);
                $('#tahun').val(selectedValue);
            });
        });
    </script>
</body>

</html>