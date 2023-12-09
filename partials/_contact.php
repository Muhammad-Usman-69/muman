<div class="mt-[72px] flex flex-col self-center mb-4 md:mt-4 w-[calc(100vw_-_36px)] sm:p-8 bg-white rounded-md p-4 space-y-4 form">
    <h2 class="text-3xl font-extrabold text-blue-600">Contact Us</h2>
    <h3 class="text-xl font-bold text-blue-600">We're here to help! Our Customer Service team is at your service.</h3>
    <form action="" class="space-y-6 pt-4 h-fit">
        <div class="grid grid-cols-1 space-y-16 pb-10 lg:grid-cols-2 lg:space-y-0 lg:space-x-2">
            <div class="relative group">
                <input
                    class="input border-[#80808080] border focus:outline-none w-full px-3 pt-3 pb-2 rounded-sm text-blue-600 focus:border-blue-500 focus:border-2 absolute"
                    type="text" name="name">
                <label class="label" for="name">Name</label>
            </div>

            <div class="relative group">
                <input
                    class="input border-[#80808080] border focus:outline-none w-full px-3 pt-3 pb-2 rounded-sm text-blue-600 focus:border-blue-500 focus:border-2 absolute"
                    type="email" name="email">
                <label class="label" for="email">Email</label>
            </div>
        </div>

        <div class="relative group w-full pb-10">
            <input
                class="input border-[#80808080] border focus:outline-none w-full px-3 pt-3 pb-2 rounded-sm text-blue-600 focus:border-blue-500 focus:border-2 absolute"
                type="text" name="question">
            <label class="label" for="question">What's your inquiry?</label>
        </div>

        <div class="relative group w-full">
            <textarea
                class="input border-[#80808080] border focus:outline-none w-full px-3 pt-3 pb-2 rounded-sm text-blue-600 focus:border-blue-500 focus:border-2 resize-none"
                name="detail" id="" rows="10"></textarea>
            <label class="label" for="detail">Your Message</label>
        </div>

        <div class="flex justify-end">
            <input class="bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:bg-blue-800 cursor-pointer" type="submit" value="Submit">
        </div>
    </form>
</div>