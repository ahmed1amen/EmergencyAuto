<li class="{{ Request::is('specializations*') ? 'active' : '' }}">
    <a href="{{ route('specializations.index') }}"><i class="fa fa-edit"></i><span>Specializations</span></a>
</li>

<li class="{{ Request::is('hospitals*') ? 'active' : '' }}">
    <a href="{{ route('hospitals.index') }}"><i class="fa fa-edit"></i><span>Hospitals</span></a>
</li>

<li class="{{ Request::is('departments*') ? 'active' : '' }}">
    <a href="{{ route('departments.index') }}"><i class="fa fa-edit"></i><span>Departments</span></a>
</li>

<li class="{{ Request::is('emergencycodes*') ? 'active' : '' }}">
    <a href="{{ route('emergencycodes.index') }}"><i class="fa fa-edit"></i><span>Emergencycodes</span></a>
</li>

<li class="{{ Request::is('doctors*') ? 'active' : '' }}">
    <a href="{{ route('doctors.index') }}"><i class="fa fa-edit"></i><span>Doctors</span></a>
</li>

<li class="{{ Request::is('nurses*') ? 'active' : '' }}">
    <a href="{{ route('nurses.index') }}"><i class="fa fa-edit"></i><span>Nurses</span></a>
</li>

<li class="{{ Request::is('managers*') ? 'active' : '' }}">
    <a href="{{ route('managers.index') }}"><i class="fa fa-edit"></i><span>Managers</span></a>
</li>

<li class="{{ Request::is('employees*') ? 'active' : '' }}">
    <a href="{{ route('employees.index') }}"><i class="fa fa-edit"></i><span>Employees</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('settings*') ? 'active' : '' }}">
    <a href="{{ route('settings.index') }}"><i class="fa fa-edit"></i><span>Settings</span></a>
</li>

