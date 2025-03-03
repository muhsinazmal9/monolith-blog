import { Fragment } from 'react'
import { Link } from '@inertiajs/react'
import { Popover, Transition } from '@headlessui/react'
import { Bars3Icon, XMarkIcon } from '@heroicons/react/24/outline'

export default function Layout({ children, categories }) {
  const navCats = categories.map(cat => (
    { name: cat.name, href: `/categories/${cat.id}` }
  ))

  const navigation = [
    { name: 'ব্লগ', href: '/blogs' },
    ...navCats
  ]

  return (
    <div className="min-h-screen bg-gray-50">
      {/* Navigation */}
      <Popover as="header" className="bg-white shadow">
        {({ open }) => (
          <>
            <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
              <div className="flex h-16 justify-between items-center">
                {/* Logo area */}
                <div className="flex">
                  <Link href="/" className="flex items-center">
                    <span className="text-xl font-bold text-indigo-600">YourSite</span>
                  </Link>
                </div>

                {/* Desktop navigation */}
                <div className="hidden md:flex md:items-center md:space-x-6">
                  {navigation.map((item) => (
                    <Link
                      key={item.name}
                      href={item.href}
                      method="get"
                      className="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors"
                    >
                      {item.name}
                    </Link>
                  ))}
                </div>

                {/* Mobile menu button */}
                <div className="flex items-center md:hidden">
                  <Popover.Button className="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span className="sr-only">Open main menu</span>
                    {open ? (
                      <XMarkIcon className="block h-6 w-6" aria-hidden="true" />
                    ) : (
                      <Bars3Icon className="block h-6 w-6" aria-hidden="true" />
                    )}
                  </Popover.Button>
                </div>
              </div>
            </div>

            {/* Mobile menu panel */}
            <Transition
              as={Fragment}
              enter="duration-150 ease-out"
              enterFrom="opacity-0 scale-95"
              enterTo="opacity-100 scale-100"
              leave="duration-100 ease-in"
              leaveFrom="opacity-100 scale-100"
              leaveTo="opacity-0 scale-95"
            >
              <Popover.Panel className="absolute inset-x-0 top-0 z-10 origin-top-right transform p-2 transition md:hidden">
                <div className="overflow-hidden rounded-lg bg-white shadow-md ring-1 ring-black ring-opacity-5">
                  <div className="flex items-center justify-between px-5 pt-4">
                    <div>
                      <span className="text-xl font-bold text-indigo-600">YourSite</span>
                    </div>
                    <div className="-mr-2">
                      <Popover.Button className="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span className="sr-only">Close main menu</span>
                        <XMarkIcon className="h-6 w-6" aria-hidden="true" />
                      </Popover.Button>
                    </div>
                  </div>
                  <div className="space-y-1 px-2 pt-2 pb-3">
                    {navigation.map((item) => (
                      <Link
                        key={item.name}
                        href={item.href}
                        method="get"
                        className="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-indigo-600"
                      >
                        {item.name}
                      </Link>
                    ))}
                  </div>
                </div>
              </Popover.Panel>
            </Transition>
          </>
        )}
      </Popover>

      {/* Main content */}
      <main className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8">
        <div className="bg-white p-6 rounded-lg shadow">
          {children}
        </div>
      </main>
    </div>
  )
}