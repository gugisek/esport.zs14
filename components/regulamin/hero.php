
<section id="bg" class="bg-cover bg-fixed">
    <section class="py-4 sm:px-[5%] md:px-[10%] bg-[#000000c0]">
        <?php include 'components/navbar.php'; ?>
       <section class="md:pt-32 pt-56 md:pb-32 pb-28">
        <h1 class="text-center font-[poppins] font-bold text-4xl text-white">Regulamin</h1>
       </section>
       <section data-aos="fade-up" class="bg-[#1c1c1c] font-[poppins] text-gray-400 p-8 sm:px-8 px-5 text-justify sm:rounded-xl shadow-xl">
       <?php
            include "./scripts/conn_db.php";
            $sql = "SELECT * FROM informations where id=13";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                echo $row['value'];
            }
        ?>
        </section>
    </section>
</section>