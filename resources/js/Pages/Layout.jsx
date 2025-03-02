import { Link } from '@inertiajs/react'

const navigation = [
    { name: 'ব্লগ', href: '/blogs' },
    { name: 'টপিক - ১', href: '/topics/1' },
    { name: 'টপিক - ২', href: '/topics/2' },
    { name: 'টপিক - ৩', href: '/' },
    { name: 'টপিক - ৪', href: '/' },
]

export default function Layout({ children }) {
    return (
        <main>
            <header className='flex gap-4'>
                {navigation.map((item, index) => (
                    <Link className='px-4 py-2 bg-gray-200' key={index} method="get" href={item.href}>
                        {item.name}
                    </Link>
                ))}

                {/* <Link href="/blogs" >Logout</Link> */}
            </header>
            <article>{children}</article>
        </main>
    )
}