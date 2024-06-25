<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modal Form</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
  
  <!-- Modal -->
  <div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
      <h2 class="text-xl font-semibold mb-4">Tambah Data Baru</h2>
      
      <form>
        <div class="mb-4">
          <label class="block text-gray-700">Nama</label>
          <input type="text" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-indigo-500">
        </div>
        
        <div class="mb-4">
          <label class="block text-gray-700">Harga</label>
          <input type="text" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-indigo-500">
        </div>
        
        <div class="mb-4">
          <label class="block text-gray-700">Image</label>
          <input type="file" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-indigo-500">
        </div>
        
        <div class="mb-4">
          <label class="block text-gray-700">Deskripsi</label>
          <textarea class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-indigo-500"></textarea>
        </div>
        
        <div class="flex justify-end">
          <button type="button" class="px-4 py-2 bg-gray-500 text-white rounded-lg mr-2">Batal</button>
          <button type="submit" class="px-4 py-2 bg-indigo-500 text-white rounded-lg">Simpan</button>
        </div>
      </form>
    </div>
  </div>
  
</body>
</html>
