$(document).ready(function () {
    $('#searchForm').on('submit', function (e) {
        e.preventDefault();

        const searchValue = $('#search').val();

        $.ajax({
            url: '/payment/search-ajax', 
            type: 'GET',
            data: { search: searchValue },
            dataType: 'json',
            success: function (response) {
                const searchResults = response.payments;
                displaySearchResults(searchResults);
            }
        });
    });

    

    function displaySearchResults(results) {
        const $searchResults = $('#searchResults');
        $searchResults.empty();

        results.forEach(payment => {
            const row = `<tr>
                            <td>${payment.name}</td>
                            <td>${payment.email}</td>
                            <td>${payment.phone}</td>
                            <td>${payment.filing_status}</td>
                            <td>${payment.ssn}</td>
                            <td>
                                <!-- Add your action buttons here -->
                            </td>
                        </tr>`;
            $searchResults.append(row);
        });
    }

    
});

