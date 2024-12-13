<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM movies ORDER BY id_movie DESC");
?>
<html>

<head>
  <title>Homepage</title>
  <style>
    /* table,
    th,
    td {
      border: 2px solid red;
    }

    table {
      border-collapse: collapse;
      width: 20%;
    }

    td {
      height: 40px;
    }

    tr {
      background-color: green;
      color: white;
    }

    th {
      background-color: #c3c3c3;
      color: #000;
    } */
  </style>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-950">

  <div class="flex justify-center mt-6">
    <a href="add.php"
      class="text-center text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700
  hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300
  dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center
  me-2 mb-2">
      Add New Movies/Films/Videos
    </a>
  </div>


  <div class="w-9/12 my-6 mx-auto relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            ID Movie
          </th>
          <th scope="col" class="px-6 py-3">
            Name
          </th>
          <th scope="col" class="px-6 py-3">
            Priority
          </th>
          <th scope="col" class="px-6 py-3">
            Description
          </th>
          <th scope="col" class="px-6 py-3">
            <!-- Edit -->
          </th>
          <th scope="col" class="px-6 py-3">
            <!-- Delete -->
          </th>
        </tr>
      </thead>
      <tbody>
        <!-- <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            Apple MacBook Pro 17"
          </th>
          <td class="px-6 py-4">
            Silver
          </td>
          <td class="px-6 py-4">
            Laptop
          </td>
          <td class="px-6 py-4">
            $2999
          </td>
          <td class="px-6 py-4">
            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
          </td>
          <td class="px-6 py-4">
            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
          </td>
        </tr> -->
        <?php
        while ($movie_data = mysqli_fetch_array($result)) {
          echo "<tr class='odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700'>";
          echo "<th scope='row' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>" . $movie_data['id_movie'] . "</th>";
          echo "<td class='px-6 py-4'>" . $movie_data['name'] . "</td>";
          echo "<td class='px-6 py-4'>" . $movie_data['priority'] . "</td>";
          echo "<td class='px-6 py-4'>" . $movie_data['description'] . "</td>";
          echo "<td class='px-6 py-4'><a href='edit.php?id_movie=$movie_data[id_movie]' class='font-medium text-blue-600 dark:text-blue-500 hover:underline'>Edit</a></td>";
          echo "<td class='px-6 py-4'><a href='delete.php?id_movie=$movie_data[id_movie]' class='font-medium text-red-600 dark:text-red-500 hover:underline'>Delete</a></td>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- <table width='80%' border=1>
    <tr>
      <th>ID Movie</th>
      <th>Name</th>
      <th>Priority</th>
      <th>Description</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    <?php
    while ($movie_data = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $movie_data['id_movie'] . "</td>";
      echo "<td>" . $movie_data['name'] . "</td>";
      echo "<td>" . $movie_data['priority'] . "</td>";
      echo "<td>" . $movie_data['description'] . "</td>";
      echo "<td><a href='edit.php?id_movie=$movie_data[id_movie]'>Edit</a></td>";
      echo "<td><a href='delete.php?id_movie=$movie_data[id_movie]'>Delete</a></td>";
    }
    ?>
  </table> -->
</body>

</html>