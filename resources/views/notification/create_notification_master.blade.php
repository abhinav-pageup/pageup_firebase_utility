<x-layout.app title="Notification">
    <x-card>
        <h4 class="text-2xl dark:text-slate-100 text-gray-900 mb-1">Send Notifications</h4>
        <hr>
        <form action="{{ route('notification.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-3 mt-5 gap-5">
            @csrf
            <div>
                <x-form.label for="project" value="Project" />
                <x-form.select name="projectMasterId" :value="$projectMaster" required />
            </div>
            <div>
                <x-form.label for="title" value="Title" />
                <x-form.input name="title" required />
            </div>
            <div>
                <div class="flex justify-between items-center">
                    <x-form.label for="icon" value="Icon" />
                    <div class="flex gap-2">
                        <x-form.checkbox value="1" id="sameAsProject" name="sameAsProject" class="mt-[2px]" checked />
                        <x-form.label for="sameAsProject" value="Same as Project" />
                    </div>
                </div>
                <x-form.input type="file" name="icon" name="icon" id="projectIcon" disabled />
            </div>
            <div>
                <x-form.label for="clickAction" value="Click Action" />
                <x-form.input type="url" name="clickAction" required />
            </div>
            <div>
                <x-form.label for="body" value="Body" />
                <x-form.textarea name="body" required />
            </div>
            <div class="col-span-3">
                <x-form.button color="blue" class="w-min">Send</x-form.button>
            </div>
        </form>
    </x-card>
</x-layout.app>
<script>
    $('#sameAsProject').change(function() {
        if ($(this).is(':checked')) {
            $('#projectIcon').prop('disabled', true).prop('required', false);
        } else {
            $('#projectIcon').prop('disabled', false).prop('required', true);
        }
    });
</script>
