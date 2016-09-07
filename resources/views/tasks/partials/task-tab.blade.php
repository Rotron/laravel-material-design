<div class="mdl-color--grey-700 mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--12-col-desktop margin-top-0 mdl-tabs__panel {{{ $status or '' }}}" id="{{ $tab }}">
    <div class="mdl-card__title mdl-color-text--white">
        <h2 class="mdl-card__title-text logo-style">
            {{ $title }}
        </h2>
    </div>
    <div class="mdl-card__supporting-text mdl-color-text--white padding-0">
        <div class="table-responsive material-table inverse">
            <table class="mdl-color--grey-700 mdl-color-text--white mdl-data-table-block mdl-js-data-table data-table full-span" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="mdl-data-table__cell--non-numeric mdl-color-text--white" colspan="2">Actions</th>
                        <th class="mdl-data-table__cell--non-numeric mdl-color-text--white">ID</th>
                        <th class="mdl-data-table__cell--non-numeric mdl-color-text--white">Name</th>
                        <th class="mdl-data-table__cell--non-numeric mdl-color-text--white">Description</th>
                        <th class="mdl-data-table__cell--non-numeric mdl-color-text--white">Status</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($tasks as $task)

                        @include('tasks.partials.task-row')

                    @endforeach

              </tbody>
            </table>
        </div>
    </div>
    <div class="mdl-card__menu" style="top: -5px;">
        <a href="{{ url('/tasks/create') }}" class="mdl-button mdl-button--icon mdl-inline-expanded mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color-text--white inline-block">
            <i class="material-icons">note_add</i>
        </a>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable search-white">
            <label class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-button--icon" for="search_table">
                <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
                <input class="mdl-textfield__input" type="search" id="search_table" placeholder="Search Terms">
                <label class="mdl-textfield__label" for="search_table">
                    Search Terms
                </label>
            </div>
        </div>
    </div>
</div>