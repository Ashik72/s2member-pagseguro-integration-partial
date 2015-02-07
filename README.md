# s2member-pagseguro-integration-partial
Partial Integration Of Pagseguro With s2Member
PagseGuro, the largest payment gateway of Brazil. Its integration with s2Member was long-desired. After 1 month of work (apparently it didn't take more than 3 days when I discovered the communicataion with s2Member, the api wasn't much helpful for me and just wasted time) I've made a partial integration.

I tested it with recurring payment for now, should work with direct payments (or may be some modification). I couldn't find a option to send button values directly after payment to s2Member. So options are limited here. My script is an outside ipn script and it can only create users using built in paypal ipn handler of s2Member. Being an outside script, it can't communicate with pagseguro anymore after creating member. So demote or cancellation of membership levels need to be done manually.

#How it works! -#

1. Place the ipn script to a folder of your site (or other) -> replace $ipnkey with yours one (s2Member > Paypal Options > Paypal IPN Integration > IPN w/ Proxy Key)
2. Copy the direct link of this script.
3. Place the link as notification URL on pagseguro.
4. On pagseguro create recurring buttons and name it like 'May Plan (or any text) - 1' - don't place more than one digit here, this digit will be membership level of user.
5. When a payment will occur, registration link will be sent to payers mail and payer can join using it. 


#Known issues# - 
1. Member can not update membership using current account, a new account need to be created always.
2. Membership level modification or cancellation is manual.
3. Because of limitation of $_POST variable, the script depends on payer mail, plans name and subscription id. I couldn't send more than this with this button.


#This script can be updated more. It might have errors, but can be solved or modified. Hope in near future s2Member will integrate Pagseguro officially.#
