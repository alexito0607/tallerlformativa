<!-- views/user_list_view.php -->
<h1>Lista de Usuarios</h1>

<?php if (isset($users) && is_array($users) && !empty($users)): ?>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cédula</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['name']); ?></td>
                    <td><?php echo htmlspecialchars($user['cedula']); ?></td>
                    <td>
                        <a href="user_edit.php?id=<?php echo $user['id']; ?>">Editar</a> | 
                        <a href="user_delete.php?id=<?php echo $user['id']; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No se han encontrado usuarios.</p>
<?php endif; ?>
