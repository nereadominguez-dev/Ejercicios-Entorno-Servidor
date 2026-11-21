<section class="users-view">
    <h2 style="color: #1e3a8a;">Listado de Usuarios</h2>
    <?php if (!empty($listaUsuarios) && is_array($listaUsuarios)): ?>
        <?php if (!empty($listaUsuarios) && is_array($listaUsuarios)): ?>
            <ul>
                <?php foreach ($listaUsuarios as $usuario): ?>
                <li style="padding: 8px 0; border-bottom: 1px solid #e2e8f0;">
                    👤 <strong><?php echo htmlspecialchars($usuario['nombre']); ?></strong> 
                    <span style="color: #64748b;">(<?php echo htmlspecialchars($usuario['email']); ?>)</span>
                </li>
            <?php endforeach; ?>
            </ul>
        <?php else: ?>
        <p>No hay usuarios registrados.</p>
        <?php endif; ?>
</section>