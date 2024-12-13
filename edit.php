<?php

include_once("config.php");
if (isset($_POST['update'])) {
	$id_movie 	=	$_GET['watchid'];
	$name		=	$_POST['name'];
	$priority	=	$_POST['priority'];
	$description		=	$_POST['description'];

	$result = mysqli_query($mysqli, "UPDATE movies 
	SET name='$name',
	priority='$priority',
	description='$description' 
	WHERE id_movie=$id_movie");
	header("Location: index.php");
}

$id = $_GET['id_movie'];
$result = mysqli_query($mysqli, "SELECT * FROM movies WHERE id_movie=$id");

while ($user_data = mysqli_fetch_array($result)) {
	$name = $user_data['name'];
	$priority = $user_data['priority'];
	$description = $user_data['description'];
}
?>
<html>

<head>
	<title>Edit User Data</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-950">

	<div class="flex justify-center mt-6">
		<a href="index.php"
			class="text-center text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700
			hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300
			dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center
			me-2 mb-2">
			View Watchlist
		</a>
	</div>

	<form action="edit.php?watchid=<?php echo $id; ?>" method="post" name="update_user" class="max-w-sm mx-auto">
		<div class="mb-5">
			<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
			<input type="text" id="name" name="name" value=<?php echo $name; ?>
				class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
			focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
			dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Film/Movie/Video" required />
		</div>
		<div class="mb-5">
			<label for="priority" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Priority</label>
			<input type="number" id="priority" name="priority" value=<?php echo $priority; ?>
				class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
			focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
			dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Priority to Watch" required />
		</div>
		<div class="mb-5">
			<label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
			<textarea id="description" name="description" rows="8" 
				class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300
			focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
			dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description About the Movie/Video/Film">
			<?php echo $description; ?>
		</textarea>
		</div>
		<input type="submit" name="update" value="Update"
			class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
		font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700
		dark:focus:ring-blue-800"></input>
	</form>

	<!-- <form name="update_user" method="post" action="edit.php?watchid=<?php echo $id; ?>">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name; ?>></td>
			</tr>
			<tr>
				<td>Priority</td>
				<td><input type="text" name="priority" value=<?php echo $priority; ?>></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><textarea name="description"><?php echo $description; ?></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form> -->
</body>

</html>