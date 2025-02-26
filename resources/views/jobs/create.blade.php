<x-layout>
    <x-page-heading> New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">

        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" placeholder="$50,000 USD"/>
        <x-forms.input label="Location" name="location" placeholder="San Francisco"/>

        <x-forms.select label="schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"/>

        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>

        <x-divider/>

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="Video, education, marketing"/>

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>
</x-layout>
