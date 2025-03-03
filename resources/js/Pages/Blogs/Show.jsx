import React from 'react'
import { Head, Link } from '@inertiajs/react'

const Show = ({ blog }) => {
    return (
        <>
            <Head title={blog.title} />
            <div>
                <Link href={'/'} className='px-4 py-2 bg-gray-200'>Back</Link>
                <h1>{blog.title}</h1>
                <hr />
                <p>{blog.description}</p>
            </div>
        </>
    )
}

export default Show