<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Profil</title>
</head>
<body style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; font-family: Arial, sans-serif; background-color: #f0f0f0;">

    <div style="text-align: center; background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        
        <div style="width: 100px; height: 100px; border: 2px solid #ccc; border-radius: 50%; overflow: hidden; margin: 0 auto;">
            <img src="{{ asset('assets/pp.jpeg') }}" alt="User Avatar" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        
        <table style="margin-top: 15px;">
            <tr>
                <td>
                    <div style="background-color: #e0e0e0; padding: 10px; border-radius: 5px; width: 250px;">
                        <h3 style="margin: 0; padding: 0;">{{$nama}}</h3>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="background-color: #e0e0e0; padding: 10px; border-radius: 5px; width: 250px;">
                        <h3 style="margin: 0; padding: 0;">{{$kelas}}</h3>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="background-color: #e0e0e0; padding: 10px; border-radius: 5px; width: 250px;">
                        <h3 style="margin: 0; padding: 0;">{{$npm}}</h3>
                    </div>
                </td>
            </tr>
        </table>
    </div>

</body>
</html>