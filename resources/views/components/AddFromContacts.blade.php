<aside class="add-from-group-aside add-from-contact-aside">
    <div class="add-from-group-container">
        <h3>Select Contacts</h3>
        <a href="#" class="close-view close-view-contact">Close View</a>
        <div class="table-container">
            <table>
                <tr>
                    <th>Contact Name</th>
                    <th>Phone Number</th>
                </tr>
                @foreach ($contacts as $contact)
                    <tr>
                        <td> <input type="checkbox" name="contact-name-here" class="messageCheckboxContact" checked
                                value="Contact-Name-Here"> {{ $contact['full_)name'] }}
                        </td>
                        <td>08012345678</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <button type="button" class="confirm-choice confirm-choice-contact">Confirm Choices</button>
    </div>
</aside>
