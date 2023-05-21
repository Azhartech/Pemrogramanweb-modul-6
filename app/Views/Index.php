<!DOCTYPE html>
<html>

<head>
    <title>Halaman Index</title>
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-image: url("https://i.postimg.cc/43mHh9jf/grunge-paint-background.jpg");
        background-repeat: no-repeat;
        background-size: cover ;

        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #B9E9FC;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-top: 100px;
    }

    h1 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }

    th {
        width: 30%;
    }

     .btn-container {
        display: flex;
        justify-content: center;
    }

    /*
    button {
        margin-top: 10px;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        text-transform: uppercase;
        cursor: pointer;
        transition: background-color 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    button:hover {
        background-color: #0056b3;
    } */

    button {
  --bg: #e74c3c;
  --text-color: #fff;
  position: relative;
  width: 150px;
  border: none;
  background: var(--bg);
  color: var(--text-color);
  padding: 1em;
  font-weight: bold;
  text-transform: uppercase;
  transition: 0.2s;
  border-radius: 5px;
  opacity: 0.8;
  letter-spacing: 1px;
  box-shadow: #c0392b 0px 7px 2px, #000 0px 8px 5px;
  margin: auto; 
}

button:hover {
  opacity: 1;
}

button:active {
  top: 4px;
  box-shadow: #c0392b 0px 3px 2px, #000 0px 3px 5px;
}

    </style>

</head>

<body>
    <div class="container">
        <h1>Profile</h1>
        <table>
            <tr>
                <th>Nama</th>
                <td>
                    <?= $nama ?>
                </td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>
                    <?= $nim ?>
                </td>
            </tr>
        </table>
        <div class="btn-container">
            <form action="/home/biodata">
                <button>
                    Biodata
                </button>
            </form>
        </div>
    </div>
</body>

</html>