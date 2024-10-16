<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-coard />
                <x-job-coard />
                <x-job-coard />
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                <x-tag>Tag1</x-tag>
                <x-tag>Tag2</x-tag>
                <x-tag>Tag3</x-tag>
                <x-tag>Tag4</x-tag>
                <x-tag>Tag5</x-tag>
                <x-tag>Tag6</x-tag>
                <x-tag>Tag7</x-tag>
                <x-tag>Tag8</x-tag>
                <x-tag>Tag9</x-tag>
                <x-tag>Tag0</x-tag>
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
        </section>
    </div>
</x-layout>
