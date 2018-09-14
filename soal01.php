<html>
    <head><title>Sistem Raport Sederhana</title></head>
    <body>
    <FORM ACTION="psoal1.php" METHOD="POST" NAME="input">
    <center><h2> Sistem Raport Sederhana </h2></center>
       <table>
       <tr>
       <td>Nama</td>
       <td> : </td>
       <td><input type='text' name='nama'</td>
       </tr>

       <tr>
       <td>NIS</td>
       <td> : </td>
       <td><input type='number' name='nis'</td>
       </tr>

       <tr>
       <td>Alamat</td>
       <td> : </td>
       <td>
       <textarea name='alamat' cols="30" rows="3"></textarea>
       </td>
       </tr>

       <tr>
       <td>Jenis Kelamin</td>
       <td> : </td>
       <td>
       <input type="radio" name="jurusan" value="Perempuan">Perempuan
       <input type="radio" name="jurusan" value="Laki-Laki">Laki-Laki</td>
       </tr>

       <tr>
       <td>Agama</td>
       <td> : </td>
       <td><select name='agama'>
            <option value='Islam'>Islam</option>
            <option value='Kristen'>Kristen</option>
            <option value='Budha'>Budha</option>
            <option value='Hindu'>Hindu</option>
            </select>

        <tr>
        <td>Asal Sekolah</td>
        <td> : </td>
        <td><input type='text' name='asal sekolah'</td>
        </tr>

        <tr>
        <td>Nama Orang Tua</td>
        <td> : </td>
        <td><input type='text' name='Nama Orang Tua'</td>
        </tr>

        <tr>
        <td>Mata Pelajaran yang disukai</td>
        <td> : </td>
        <td>
            <input type="checkbox" name="Matematika"</td>Matematika
            <input type="checkbox" name="Ilmu Pengetahuan Alam"</td>Ilmu Pengetahuan Alam
            <input type="checkbox" name="Ilmu Pengetahuan Sosial"</td>Ilmu Pengetahuan Sosial<br>
            <input type="checkbox" name="Pendidikan Agama Islam"</td>Pendidikan Agama Islam
            <input type="checkbox" name="Bahasa Indonesia"</td>Bahasa Indonesia
            </tr>

        <tr>
        <td>Total Nilai Ijasah SD</td>
        <td> : </td>
        <td><input type='text' name='total nilai ijasah sd'</td>
        </tr>

        <tr>
        <td>Email</td>
        <td> : </td>
        <td><input type='text' name='email'</td>
        </tr>

        <tr>
        <td>&nbsp</td>
        <td>&nbsp</td>
        <td><input type="Submit" value="Input Data" name="Input">
        </td>
        </tr>
    </body>
    </table>
</html>