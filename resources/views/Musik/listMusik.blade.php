<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    {{-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1px;
            text-align: center;
        }

        nav {
            background-color: #555;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .container {
            margin: 20px;
        }

        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style> --}}
    <style>
      body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background-color: #f4f4f4;
      }

      header {
          background-color: #333;
          color: #fff;
          padding: 1px;
          text-align: center;
      }

      nav {
          background-color: #555;
          color: #fff;
          padding: 10px;
          text-align: center;
      }

      nav a {
          color: #fff;
          text-decoration: none;
          margin: 0 10px;
      }

      .container {
          margin: 20px;
      }

      .content {
          background-color: #fff;
          padding: 20px;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      table {
          width: 100%;
          border-collapse: collapse;
          margin-top: 20px;
      }

      th, td {
          border: 1px solid #ddd;
          padding: 8px;
          text-align: left;
      }

      th {
          background-color: #333;
          color: #fff;
      }

      tbody tr:hover {
          background-color: #f5f5f5;
      }

      footer {
          background-color: #333;
          color: #fff;
          padding: 10px;
          text-align: center;
      }
  </style>
</head>
<body>
    <header>
        <h1>List Tiket Konser Musik</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="/dashboard">Dashboard</a>
        <a href="/login">Logout</a>
    </nav>

    <div class="container">
      <div class="content">
          <h2>Tiket Konser Musik</h2>
          <table border="1" style="width:100%">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama Tiket</th>
                      <th>Tanggal</th>
                      <th>Lokasi</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>Ariana Grande Tour Musik to Indonesia</td>
                      <td>2024-03-15</td>
                      <td>Batam Center, Kepulauan Riau</td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>TXT Consert 2nd in Indonesia</td>
                      <td>2024-04-20</td>
                      <td>Tanjung Pinang, Kepulauan Riau</td>
                  </tr>
                  <tr>
                      <td>3</td>
                      <td>Mahalini Intreduce New Album </td>
                      <td>2024-05-10</td>
                      <td>Batam Center, Kepulauan Riau</td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
  

    <footer>
        &copy; 2024 1st Symphony
    </footer>
</body>
</html>
