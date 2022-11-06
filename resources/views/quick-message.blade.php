<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/quick-message.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"
        integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Quick Message</title>
</head>

<body>
    <x-AddFromGroup />
    <x-AddFromContacts :contacts="$contacts" />
    <x-dashboard-header />
    <x-dashboard-sidebar />
    <main>
        <section>
            <div class="quick-message-container">
                <h2>Send A Message</h2>
                <div class="quick-actions">
                    <a href="#" class="add-from-contact">Add Existing Contact</a>
                    <a href="#" class="add-from-group">Add Contacts From Group</a>
                </div>
                {{-- Input message Section --}}
                {{-- Add components here --}}

                <form action="#">
                    @csrf
                    <div class="message-body">
                        {{-- Create a textarea --}}

                        <div class="message">
                            <h3>
                                <label for="message">Message</label>
                            </h3>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Type your message here"></textarea>
                            {{-- Create a button --}}
                        </div>
                        <div class="contacts">
                            <h3>
                                <label for="contacts">Contacts</label>
                            </h3>
                            <textarea name="contacts" id="contacts" cols="30" rows="10" placeholder="Type your contacts here"
                                class="contacts-field"></textarea>
                        </div>
                    </div>
                    <div class="message-footer">
                        <button type="submit" class="send-message-button">Send Message</button>
                    </div>
                </form>
        </section>
    </main>
    <script>
        const addFromGroup = document.querySelector('.add-from-group');
        const addFromGroupAside = document.querySelector('.add-from-group-aside');
        const closeView = document.querySelector('.close-view');
        const confirmChoice = document.querySelector('.confirm-choice');

        addFromGroup.addEventListener('click', () => {
            addFromGroupAside.classList.add('active');
        });

        closeView.addEventListener('click', () => {
            addFromGroupAside.classList.remove('active');
        });

        confirmChoice.addEventListener('click', () => {
            addFromGroupAside.classList.remove('active');
        });

        // For contact
        const addFromContact = document.querySelector('.add-from-contact');
        const addFromContactAside = document.querySelector('.add-from-contact-aside');
        const closeViewContact = document.querySelector('.close-view-contact');
        const confirmChoiceContact = document.querySelector('.confirm-choice-contact');

        addFromContact.addEventListener('click', () => {
            addFromContactAside.classList.add('active');
        });

        closeViewContact.addEventListener('click', () => {
            addFromContactAside.classList.remove('active');
        });

        confirmChoiceContact.addEventListener('click', () => {
            addFromContactAside.classList.remove('active');
        });
    </script>
    <script src="{{ asset('js/add-to-contact-field.js') }}"></script>
</body>

</html>
