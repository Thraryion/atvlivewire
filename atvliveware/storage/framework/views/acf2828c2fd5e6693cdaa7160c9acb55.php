
<div>
    <h1>Anotações</h1>

    <!--[if BLOCK]><![endif]--><?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <div class="mb-3">
        <input type="text" wire:model="newNote" placeholder="Digite sua anotação..." class="form-control">
        <button wire:click="addNote" class="btn btn-primary mt-2">Adicionar Anotação</button>
    </div>

    <div>
        <ul class="list-group">
            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="list-group-item"><?php echo e($note); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li class="list-group-item">Nenhuma anotação encontrada.</li>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </ul>
    </div>

    <div class="mt-3">
        <button wire:click="clearNotes" class="btn btn-danger">Limpar Anotações</button>
        <button wire:click="saveNotes" class="btn btn-success">Salvar Anotações</button>
    </div>
</div>

<?php /**PATH /home/aluno/atvliveware/resources/views/livewire/anotacoes.blade.php ENDPATH**/ ?>