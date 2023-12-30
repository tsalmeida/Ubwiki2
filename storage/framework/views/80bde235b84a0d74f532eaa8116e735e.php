<?php $__env->startSection('content'); ?>

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar_language_login','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar_language_login'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    <div class="container">
        <?php if (isset($component)) { $__componentOriginal0b31d986065149a3a95e911d8e83f37b = $component; } ?>
<?php $component = App\View\Components\WhiteBoard::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('white-board'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\WhiteBoard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <h1><?php echo e(__('messages.welcome_to')); ?></h1>
            <h2><?php echo e(__('messages.slogan')); ?></h2>

            <p><?php echo e(__('messages.welcome')); ?></p>
            <p><?php echo e(__('messages.courses_description')); ?></p>
            <p><?php echo e(__('messages.notes_feature')); ?></p>
            <p><?php echo e(__('messages.encouragement')); ?></p>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0b31d986065149a3a95e911d8e83f37b)): ?>
<?php $component = $__componentOriginal0b31d986065149a3a95e911d8e83f37b; ?>
<?php unset($__componentOriginal0b31d986065149a3a95e911d8e83f37b); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal0b31d986065149a3a95e911d8e83f37b = $component; } ?>
<?php $component = App\View\Components\WhiteBoard::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('white-board'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\WhiteBoard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <h1>Environments</h1>
            <p>Ubwiki has three facets you can visit:</p>
            <ul>
                <li>
                    <?php if (isset($component)) { $__componentOriginal07583d90333ad140b33adb36c9f734e3 = $component; } ?>
<?php $component = App\View\Components\IconButton::resolve(['icon' => 'fa fa-dinosaur','classes' => 'bg-gray','title' => 'Airplane','link' => 'http://www.google.com/'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\IconButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal07583d90333ad140b33adb36c9f734e3)): ?>
<?php $component = $__componentOriginal07583d90333ad140b33adb36c9f734e3; ?>
<?php unset($__componentOriginal07583d90333ad140b33adb36c9f734e3); ?>
<?php endif; ?>
                    Office
                </li>
                <li>
                    <?php if (isset($component)) { $__componentOriginal07583d90333ad140b33adb36c9f734e3 = $component; } ?>
<?php $component = App\View\Components\IconButton::resolve(['icon' => 'fa fa-dinosaur','classes' => 'bg-gray','title' => 'Airplane','link' => 'http://www.google.com/'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\IconButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal07583d90333ad140b33adb36c9f734e3)): ?>
<?php $component = $__componentOriginal07583d90333ad140b33adb36c9f734e3; ?>
<?php unset($__componentOriginal07583d90333ad140b33adb36c9f734e3); ?>
<?php endif; ?>
                    Courses
                </li>
                <li>
                    <?php if (isset($component)) { $__componentOriginal07583d90333ad140b33adb36c9f734e3 = $component; } ?>
<?php $component = App\View\Components\IconButton::resolve(['icon' => 'fa fa-dinosaur','classes' => 'bg-gray','title' => 'Airplane','link' => 'http://www.google.com/'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\IconButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal07583d90333ad140b33adb36c9f734e3)): ?>
<?php $component = $__componentOriginal07583d90333ad140b33adb36c9f734e3; ?>
<?php unset($__componentOriginal07583d90333ad140b33adb36c9f734e3); ?>
<?php endif; ?>
                    Public Library
                </li>
            </ul>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0b31d986065149a3a95e911d8e83f37b)): ?>
<?php $component = $__componentOriginal0b31d986065149a3a95e911d8e83f37b; ?>
<?php unset($__componentOriginal0b31d986065149a3a95e911d8e83f37b); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal0b31d986065149a3a95e911d8e83f37b = $component; } ?>
<?php $component = App\View\Components\WhiteBoard::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('white-board'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\WhiteBoard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <h1>About your Office</h1>
            <p>In your office, you will find the artifacts that result from your studies in the other areas of Ubwiki.
                For example, articles you wrote, study notes, pages marked as studied, your participation in forums and
                others.</p>

            <p>Also in your office you can set a nickname, which will allow you to take part in the forum, as well as to
                those a combination of color and icon which will form your avatar.</p>

            <p>And finally, in your office you can create pages and text documents. Pages can be turned into
                full-fledged courses, as long as they have a title and no sections.</p>
            <h1>About the Courses</h1>
            <p>Courses are structures that contain and shape the information stored at Ubwiki. Courses are divided in
                modules containing topics, which are standard Ubwiki pages, capable of carrying a number of element
                types, such as images and videos, as well as study notes which are private to the users with access to
                it.</p>

            <p>Courses can be shared in a number of ways: they can be limited to their authors or shared with a study
                group or individual. It is also possible to block other users from changing the course content, which is
                thus treated as an 'authored' work. In this way, something like a book can be fully written in Ubwiki,
                while making use of the forum for each page so that an engaged community can help the author realize his
                creative vision.</p>
            <h1>About the Public Library</h1>
            <p>In the library, users will find information about works of a number of types, such as books, movies,
                music records and the such. Library items added to your office will become a part of your personal
                collection.</p>

            <p>Above all, we recommend users to write about books they read as a knowledge fixation method. To take part
                in a community effort to improve book summaries is possibly one of the best ways to study a book.</p>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0b31d986065149a3a95e911d8e83f37b)): ?>
<?php $component = $__componentOriginal0b31d986065149a3a95e911d8e83f37b; ?>
<?php unset($__componentOriginal0b31d986065149a3a95e911d8e83f37b); ?>
<?php endif; ?>

    </div>

    <!-- Include the modals -->
    <?php echo $__env->make('components.modal_languages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components.modal_login_choice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/ubwiki/welcome.blade.php ENDPATH**/ ?>