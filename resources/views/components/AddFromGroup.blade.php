<aside class="add-from-group-aside">
    <div class="add-from-group-container">
        <h3>Select Groups</h3>
        <a href="#" class="close-view">Close View</a>
        <div class="table-container">
            <table>
                <tr>
                    <th>Group Name</th>
                    <th>Contacts</th>
                </tr>
                @foreach ($groups as $group)
                    <tr>
                        <td> <input type="checkbox" name="contact-name-here" class="messageCheckboxGroup"
                                value="{{ $group['contact_number'] }}"> {{ $group['group_name'] }}
                        </td>
                        <td>{{ $group['contact_number'] }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <button type="button" class="confirm-choice">Confirm Choices</button>
    </div>
</aside>
