<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Interaktif Developer</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body>
    <h1 class="m-5 text-2xl font-bold text-center text-green-600 hover:text-green-800 transform hover:scale-110 transition-transform delay-200"> Profile Interaktif Developer Pemula </h1>

    <div class="container mx-auto m-5 p-5">
        <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-green-600 text-white">
                <tr>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">ID Developer</th>
                    <th class="px-4 py-2">Kota/Tgl Lahir</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">No. WhatsApp</th>
                </tr>
            </thead>
            <tbody class="bg-gray-100 hover:bg-green-100 text-center">
                <tr>
                    <td class="px-4 py-2">Perdiyanto</td>
                    <td class="px-4 py-2">20</td>
                    <td class="px-4 py-2">Mahasiswa</td>
                    <td class="px-4 py-2">perdiyanto967@gmail.com</td>
                    <td class="px-4 py-2">085755471944</td>
                </tr>
                <tr>
                    <td colspan="5" class=" border-gray-300">
                        <div class="container mx-auto m-5 p-10 border border-gray-300 w-1/2 rounded-lg bg-green-50 text-start">
                            <h2 class="text-xl font-bold text-green-600 hover:text-green-800 transform hover:scale-110 transition-transform delay-200 mb-5 text-center">FORM</h2>

                            <form method="post">
                                
                                <label for="fw" class="block text-green-700 font-bold mb-2 text-start">Framework/Tools:</label>
                                <input type="text" name="fw" class="border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:ring-2 focus:ring-green-500 w-full mb-4" placeholder="Masukkan framework/tools yang dikuasai" />

                                <label for="cerita" class="block text-green-700 font-bold mb-2 text-start">Cerita singkat pengalaman membuat aplikasi/website:</label>
                                <textarea id="cerita" name="cerita" class="border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:ring-2 focus:ring-green-500 w-full mb-4" placeholder="Masukkan cerita singkat"></textarea>

                                <label for="tools" class="block text-green-700 font-bold mb-2 text-start">Tools Penunjang:</label>
                                <input type="checkbox" name="tool[]" value="VS Code" class="mr-2 "> VS Code
                                <input type="checkbox" name="tool[]" value="GitHub" class="mr-2 mx-5"> GitHub
                                <input type="checkbox" name="tool[]" value="Postman" class="mr-2 mx-5"> Postman
                                <input type="checkbox" name="tool[]" value="Figma" class="mr-2 mx-5 mb-5"> Figma  
                                
                                <label for="minat" class="block text-green-700 font-bold mb-2 text-start">Minat bidang:</label>
                                <input type="radio" name="minat" value="Frontend" class="mr-2 "> Front end
                                <input type="radio" name="minat" value="Backend" class="mr-2 mx-5"> Back end
                                <input type="radio" name="minat" value="Fullstack" class="mr-2 mx-5 mb-5"> Full stack

                                <label for="menu" class="block text-green-700 font-bold mb-2 text-start">Tingkat Skill Coding:</label>
                                <select name="skill" class="border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:ring-2 focus:ring-green-500 w-full mb-4">
                                    <option value="Dasar">Dasar</option>
                                    <option value="Cukup">Cukup</option>
                                    <option value="Profesional">Profesional</option>
                                </select>

                                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-green-500" name="submit">Kirim</button>
                            </form> 
                        </div>                
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
        function tampil($data){
            echo "<div class='container mx-auto m-5 p-5'>";
            echo "<table class='min-w-full border border-gray-300 rounded-lg overflow-hidden'>";

            echo "<thead class='bg-green-600 text-white'>";
            echo "<tr>";
            foreach($data as $k => $v){
                echo "<th class='px-4 py-2'> $k </th>";
            }
            echo "</tr>";
            echo "</thead>";

            echo "<tbody class='bg-gray-100 text-center'>";
            echo "<tr class='hover:bg-green-100'>";
            foreach($data as $k => $v){
                echo "<td class='px-4 py-2'> $v </td>";
            }
            echo "</tr>";
            echo "</tbody>";

            echo "</table>";
            echo "</div>";
        }

        if(isset($_POST['submit'])) {
            $fw = $_POST['fw'];
            $cerita = $_POST['cerita'];
            $tools = $_POST['tool'] ?? [];
            $minat = $_POST['minat'] ?? [];
            $skill = $_POST['skill'];

            if($fw=="" || $cerita=="" || empty($tools) || $minat=="" || $skill=="") {
                echo "Semua wajib diisi!";
            } else {
                $fwArr = explode(",", $fw);

                $data = [
                    "Framework" => implode(", ", $fwArr),
                    "Tools" => implode(", ", $tools),
                    "Minat" => $minat,
                    "Skill" => $skill
                ];

                tampil($data);
                echo "<div class='container bg-gradient-to-b from-white to-green-400 mx-auto m-5 p-5 text-center rounded-lg'>";
                echo "<h2 class='text-xl font-bold text-green-600 hover:text-green-800 transform hover:scale-110 transition-transform delay-200 mb-5'>Cerita Singkat:</h2>";
                echo "<p class='text-gray-700 mb-5'>$cerita</p>";
                
                if(count($fwArr) > 2){
                    echo "<p class='text-gray-700 font-bold'>Skill Anda cukup luas di bidang development!</p>";
                }
                echo "</div>";  
            }
        }
        ?>
  </body>
</html>