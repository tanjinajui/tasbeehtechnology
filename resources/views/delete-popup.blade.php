<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tailwind Secure Delete</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

  <!-- Main Container -->
  <div class="text-center bg-white p-8 rounded-lg shadow-lg w-80">
    <h2 id="data" class="text-xl font-semibold mb-6 text-gray-700">This is secure data</h2>
    <button onclick="showPopup()" class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-md font-medium">
      Delete
    </button>
  </div>

  <!-- Overlay -->
  <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-40 z-40"></div>

  <!-- Popup Modal -->
  <div id="popup" class="hidden fixed z-50 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded-lg shadow-lg w-80">
    <h3 class="text-lg font-semibold mb-4 text-gray-800">Enter PIN to Confirm</h3>
    <input id="pinInput" type="password" placeholder="Enter PIN"
           class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4 focus:outline-none focus:ring-2 focus:ring-blue-400" />
    <div class="flex justify-center gap-3">
      <button onclick="checkPin()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md">Confirm</button>
      <button onclick="closePopup()" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded-md">Cancel</button>
    </div>
  </div>

  <!-- Script -->
  <script>
    const correctPin = "1234"; // এখানে আপনার পিন দিন

    function showPopup() {
      document.getElementById("overlay").classList.remove("hidden");
      document.getElementById("popup").classList.remove("hidden");
    }

    function closePopup() {
      document.getElementById("overlay").classList.add("hidden");
      document.getElementById("popup").classList.add("hidden");
      document.getElementById("pinInput").value = "";
    }

    function checkPin() {
      const inputPin = document.getElementById("pinInput").value;
      if (inputPin === correctPin) {
        document.getElementById("data").innerText = "Data Deleted Successfully!";
        closePopup();
      } else {
        alert("Incorrect PIN!");
      }
    }
  </script>

</body>
</html>