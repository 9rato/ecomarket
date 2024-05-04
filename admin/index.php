<?php
include("menu/header.php");
?>

<div class="flex ">
    <div class="flex-2 hidden sm:block">
        <?php
        include('menu/sidemenu.php');
        ?>
    </div>
    <div class="flex-1 p-[20px] main-contect">
        <!--contect-->
    <span class="mr-2 inline-flex text-lg text-blackblue"><img src="icons/stars.svg" class="h-4 w-4 mr-2"> Post Item for Sale</span> 
    <form action="#" method="POST" class="mx-auto bg-white shadow-md rounded px-8 py-6">
      <div class="mb-4">
        <label for="product_name" class="block text-gray-700 text-sm font-bold mb-2">Product Name</label>
        <input type="text" id="product_name" name="product_name" placeholder="Bag, Cap" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-4">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
        <textarea id="description" name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="4"></textarea>
      </div>
      <div class="mb-4">
        <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price</label>
        <input type="number" id="price" name="price" placeholder="1000" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-4">
        <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Select Category</label>
        <select id="category" name="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          <option value="1">Category 1</option>
          <option value="2">Category 2</option>
          <option value="3">Category 3</option>
          <!-- Add more options as needed -->
        </select>
      </div>
      <div class="mb-4">
        <label for="brand" class="block text-gray-700 text-sm font-bold mb-2">Select Brand</label>
        <select id="brand" name="brand" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          <option value="1">Brand 1</option>
          <option value="2">Brand 2</option>
          <option value="3">Brand 3</option>
          <!-- Add more options as needed -->
        </select>
      </div>
      <div class="mb-4">
        <label for="product_name" class="block text-gray-700 text-sm font-bold mb-2">Product Rate</label>
        <input type="text" id="product_name" name="product_name" placeholder="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-4">
        <label for="product_name" class="block text-gray-700 text-sm font-bold mb-2">Sold Out</label>
        <input type="text" id="product_name" name="product_name" placeholder="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-4">
        <label for="product_name" class="block text-gray-700 text-sm font-bold mb-2">Item Colour</label>
        <input type="text" id="product_name" name="product_name" placeholder="Blue" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-4">
        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
        <input type="file" id="image" name="image" placeholder="Main product image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-4">
        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Add More Item Image</label>
        <input type="file" id="image" name="image" placeholder="other product image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="flex items-center justify-between">
        <button type="submit" class="bg-blackblue hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Upload Item</button>
      </div>
    </form>

        <!--contect-->
    </div>
</div>

<?php
//include('menu/footer.php');
?>