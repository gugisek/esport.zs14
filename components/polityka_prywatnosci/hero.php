
<section id="bg" style="background-image: url('public/img/green.jpg');" class="bg-cover bg-fixed">
    <section class="py-4 px-[10%] bg-[#00000099]">
        <?php include 'components/navbar.php'; ?>
       <section class="py-32">
        <h1 class="text-center font-[poppins] font-bold text-4xl text-white">Polityka prywatności</h1>
       </section>
       <section data-aos="fade-up" class="bg-[#1c1c1c] font-[poppins] text-gray-400 p-8 text-justify rounded-xl shadow-xl">
        <?php
            include "./scripts/conn_db.php";
            $sql = "SELECT * FROM informations where id=14";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                echo $row['value'];
            }
        ?>
       </section>
    </section>
</section>