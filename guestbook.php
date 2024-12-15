<?php
include 'includes/header.php';
include 'includes/db.php';

// Menangani data yang dikirimkan melalui form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'add') {
    $name = $_POST['name'];
    $email = $_POST['email'];  // Menambahkan email
    $message = $_POST['message'];
    $query = "INSERT INTO guestbook (name, email, message) VALUES ('$name', '$email', '$message')";
    mysqli_query($conn, $query);
}

// Menangani proses pengeditan pesan
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'edit') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $query = "UPDATE guestbook SET name='$name', email='$email', message='$message' WHERE id='$id'";
    mysqli_query($conn, $query);
}

// Menangani proses penghapusan pesan
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM guestbook WHERE id='$id'";
    mysqli_query($conn, $query);
}

?>

<section id="content" style="display: flex; gap: 20px; justify-content: center; align-items: flex-start; padding: 20px;">
    <!-- Card 1: Guestbook Form -->
    <div class="card" style="width: 45%; background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s, box-shadow 0.3s;">
        <h2 style="margin-bottom: 20px; text-align: center;">Buku Tamu</h2>
        <form method="POST">
            <input type="hidden" name="action" value="add">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Kirim</button>
        </form>

        <h3 style="margin-top: 30px; text-align: center;">Data Buku Tamu:</h3>
        <div style="overflow-y: auto; max-height: 200px;">
        <?php
        // Menampilkan pesan tamu dari database
        $query = "SELECT * FROM guestbook";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p><strong>" . htmlspecialchars($row['name']) . "</strong> (" . htmlspecialchars($row['email']) . "): " . htmlspecialchars($row['message']) . "</p>";
            echo "<button class='edit-btn' data-id='" . $row['id'] . "' data-name='" . htmlspecialchars($row['name']) . "' data-email='" . htmlspecialchars($row['email']) . "' data-message='" . htmlspecialchars($row['message']) . "'>Edit</button> | ";
            echo "<a href='?action=delete&id=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this message?\")'>Delete</a><br>";
        }
        ?>
        </div>
    </div>

    <!-- Card 2: Contact Information -->
    <div class="card" style="width: 45%; background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s, box-shadow 0.3s;">
        <h2 style="margin-bottom: 20px; text-align: center;">Kontak Saya</h2>
        <div class="contact-icons" style="text-align: center;">
            <a href="https://www.instagram.com/fariz_291/profilecard/?igsh=MWN4YWwxcWZuZXRvdw==" target="_blank"><i class="fab fa-instagram"></i> Instagram</a><br>
            <a href="https://www.facebook.com/share/jwb6ENjgYM67jWfZ/" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a><br>
            <a href="https://wa.me/085691930500" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a><br>
            <a href="https://www.linkedin.com/in/muhammad-fariz-ade-satriyo-1641122b9?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a><br>
            <a href="mailto:fariz4384@gmail.com" target="_blank"><i class="fas fa-envelope"></i> Email</a><br>
            <a href="tel:+6285691930500" target="_blank"><i class="fas fa-phone"></i> Telepon</a><br>
        </div>
    </div>
</section>

<!-- Modal Pop-up untuk Edit Pesan -->
<div id="editModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1000;">
    <div style="background: #fff; padding: 20px; margin: 50px auto; width: 80%; max-width: 500px; border-radius: 8px;">
        <h2>Edit Pesan</h2>
        <form method="POST">
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="id" id="edit-id">
            <div class="form-group">
                <label for="edit-name">Nama:</label>
                <input type="text" id="edit-name" name="name" required>
            </div>
            <div class="form-group">
                <label for="edit-email">Email:</label>
                <input type="email" id="edit-email" name="email" required>
            </div>
            <div class="form-group">
                <label for="edit-message">Pesan:</label>
                <textarea id="edit-message" name="message" required></textarea>
            </div>
            <button type="submit">Simpan Perubahan</button>
            <button type="button" onclick="closeModal()">Batal</button>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script>
// Menangani klik tombol Edit untuk menampilkan modal pop-up
const editButtons = document.querySelectorAll('.edit-btn');
editButtons.forEach(button => {
    button.addEventListener('click', function() {
        const id = this.getAttribute('data-id');
        const name = this.getAttribute('data-name');
        const email = this.getAttribute('data-email');
        const message = this.getAttribute('data-message');

        // Menampilkan modal pop-up dan mengisi data
        document.getElementById('edit-id').value = id;
        document.getElementById('edit-name').value = name;
        document.getElementById('edit-email').value = email;
        document.getElementById('edit-message').value = message;
        document.getElementById('editModal').style.display = 'block';
    });
});

// Menutup modal
function closeModal() {
    document.getElementById('editModal').style.display = 'none';
}
</script>
