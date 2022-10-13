// Application JavaScript
console.log('Laravel app loaded');

// Example: Simple API call
async function fetchUser() {
    try {
        const response = await fetch('/api/user');
        const data = await response.json();
        console.log('User data:', data);
    } catch (error) {
        console.error('Error fetching user:', error);
    }
}

// Initialize app
document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM ready');
});
// Commit 30 - 2022-03-24 13:54:13
// Commit 67 - 2022-06-26 12:03:14
// Commit 30 - 2022-01-16 17:28:17
